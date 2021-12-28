<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site5Controller extends Controller
{
    public function index()
    {
        return view('site5.index');
    }


    public function about()
    {
        return view('site5.about');
    }

    public function post()
    {
        return view('site5.post');
    }

    public function contact()
    {
        return view('site5.contact');
    }





}
