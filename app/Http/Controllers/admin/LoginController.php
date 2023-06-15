<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\Facades\Auth;
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

        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $infologin = [
            'email'=>$req->email,
            'password'=>$req->password
        ];

        if(Auth::attempt($infologin)){
            //Jika otentikasi sukses
            return redirect('User')->with('Success','Anda Berhasil Login');
        }
        else{
            //Jika otentikasi gagal
            // return 'Gagal';
            return redirect('Login')->withErrors('Username dan Password yang dimasukkan tidak valid');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('Login')->with('Success','Anda Berhasil Logout'); 
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
            'nama'=>'required',
            'email'=>'required|email|unique:user', //untuk mencek apakah email yg dibuat valid atau tidak, sudh ada atau belum
            'password'=>'required|min:6' //Jumlah password minimal 6 
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
            'password' => Hash::make($req->password)
        ];

        // Memasukkan data sigin kedalam tabel user
        User::create($data);


        $infologin = [
            'email'=>$req->email,
            'password'=>$req->password
        ];

        if(Auth::attempt($infologin)){
            //Jika otentikasi sukses
            return redirect('User')->with('Success',Auth::user()->nama . 'Anda Berhasil Login');
        }
        else{
            //Jika otentikasi gagal
            // return 'Gagal';
            return redirect('Login')->withErrors('Username dan Password yang dimasukkan tidak valid');
        }
    }

    public function signinProses(Request $request)
    {
        $user = User::create([
            'nama' => $request->email,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/email/verify');
    }
}
