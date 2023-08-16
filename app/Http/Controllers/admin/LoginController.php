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

        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $infologin = [
            'email' => $req->email,
            'password' => $req->password
        ];

        if (Auth::attempt($infologin)) {
            // Jika otentikasi sukses
            return redirect('admin')->with('Success', 'Anda Berhasil Login sebagai Admin');
        } else {
            return back()->with('Error', 'Email atau password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('Success', 'Anda Berhasil Logout');
    }
}
