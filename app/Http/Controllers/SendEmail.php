<?php

namespace App\Http\Controllers;

use App\Models\Orang;
use Illuminate\Http\Request;
use App\Mail\TestSendingEmail;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Controller
{
    public function index()
    {  
        $orang = Orang::all();
        Mail::to('hanaaa@gmail.com')->send(new TestSendingEmail($orang));
    }
}
