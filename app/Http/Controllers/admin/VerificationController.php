<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class VerificationController extends Controller
{


    public function verify(Request $request, $id, $hash)
    {
        // Temukan pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Verifikasi hash yang diberikan dengan hash yang ada dalam pengguna
        if ($user->hasVerifiedEmail()) {
            // Jika email sudah diverifikasi sebelumnya
            return redirect('/')->with('status', 'Email already verified.');
        }

        if (hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
            // Jika hash cocok, tandai email sebagai diverifikasi
            $user->markEmailAsVerified();

            // Lakukan tindakan lain yang diperlukan setelah verifikasi
            // Misalnya, mengirimkan notifikasi, memberikan akses, dll.
            // dd('berhasil');

            return redirect('/')->with('status', 'Email verified successfully.');
        }

        // Jika hash tidak cocok, tampilkan pesan error
        return redirect('/')->with('error', 'Invalid verification link.');
    }
}
