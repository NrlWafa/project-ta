<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view("landingpage.blog.blog");
    }

    public function pelatihan1()
    {
        return view("landingpage.blog.pelatihan1");
    }

     public function pelatihan2()
    {
        return view("landingpage.blog.pelatihan2");
    }

     public function pelatihan3()
    {
        return view("landingpage.blog.pelatihan3");
    }

     public function rekrutmen1()
    {
        return view("landingpage.blog.rekrutmen1");
    }

     public function rekrutmen2()
    {
        return view("landingpage.blog.rekrutmen2");
    }

     public function rekrutmen3()
    {
        return view("landingpage.blog.rekrutmen3");
    }
}
