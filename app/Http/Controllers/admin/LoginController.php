<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function login(Request $req)
    {
        FacadesSession::flash('email', $req->email);

        $req->validate(
            [
                'email' => 'required',
                'password' => 'required',

            ],
            [
                'email.unique' => 'Silahkan masukkan email yang valid',
                'password.required' => 'Password Wajib diisi!',
            ]
        );

        $infologin = [
            'email' => $req->email,
            'password' => $req->password
        ];

        $User = User::where('email', $req->email)->first();
        $UserLevel = $User->id_level ?? 0;


        if (Auth::attempt($infologin)) {
            // dd($req->id_level);
            if ($UserLevel == 1) {
                //Jika otentikasi sukses sebagai admin
                return redirect('admin')->with('Success', 'Anda Berhasil Login sebagai Admin');
            } else {
                //Jika otentikasi sukses sebagai user
                return redirect('User')->with('Success', 'Anda Berhasil Login');
            }
        } else {
            //Jika otentikasi gagal
            return redirect('Login')->withErrors('Username atau Password yang Anda masukkan tidak valid!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('Login')->with('Success', 'Anda Berhasil Logout');
    }



    public function signin()
    {
        return view("signin");
    }

    public function create(Request $req)
    {
        FacadesSession::flash('nama', $req->nama);
        FacadesSession::flash('email', $req->email);
        $req->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:user', //untuk mencek apakah email yg dibuat valid atau tidak, sudh ada atau belum
            'password' => 'required|min:6' //Jumlah password minimal 6 
        ], [
            'nama.required' => 'Nama Wajib diisi!',
            'email.required' => 'Email Wajib diisi!',
            'email.email' => 'Silahkan masukkan email yang valid',
            'email.unique' => 'Email sudah pernah digunakan, silahkan gunakan email yang lain',
            'password.required' => 'Password Wajib diisi!',
            'password.min' => 'Minimum password yang diizinkan adalah 6 karakter'
        ]);

        // Memanggil data
        $data = [
            'nama' => $req->nama,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'id_level' => 2
        ];


        // Memasukkan data sigin kedalam tabel user
        $user = User::create($data);


        $infologin = [
            'email' => $req->email,
            'password' => $req->password
        ];

        $User = User::where('email', $req->email)->first();
        $UserLevel = $User->id_level;
        if (Auth::attempt($infologin)) {
            // dd($req->id_level);
            if ($UserLevel == 2) {
                event(new Registered($user));
                Auth::login($user);
                return redirect('/email/verify');

                //Jika otentikasi sukses sebagai admin
                // return redirect('User')->with('Success', 'Anda Berhasil Login');
            } else {
                //Jika otentikasi sukses sebagai user
                return redirect('admin')->with('Success', 'Anda Berhasil Login sebagai Admin');
            }
        } else {

            //Jika otentikasi gagal
            return redirect('Login')->withErrors('Username atau Password yang Anda masukkan tidak valid');
        }
    }

    protected function authenticated(Request $request, $user)
    {
        if (!$user->hasVerifiedEmail()) {
            $user->sendEmailVerificationNotification();
        }
    }


    // public function signinProses(Request $req)
    // {
    //     $user = User::create([
    //         'nama' => $req->nama,
    //         'email' => $req->email,
    //         'password' => Hash::make($req->password)
    //     ]);

    //     event(new Registered($user));

    //     Auth::login($user);

    //     return redirect('/email/verify');
    // }
}
