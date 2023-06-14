<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class LoginController extends Controller
{
     public function index()
    {
        return view("login");
    }

    public function signin()
    {
        return view("signin");
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
