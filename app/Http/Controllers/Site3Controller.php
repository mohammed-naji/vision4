<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site3Controller extends Controller
{
    public $age = 20;

    public function index()
    {

        $names = ['Mohammed Naji', 'Aya', 'Bahaa', 'Abed', 'Ahmed', 'Mohammed Saqer', 'Mohammed Jamal'];

        $study_years = 3;

        // return view('site3.index')->with('names', $names)->with('age', $this->age);

        return view('site3.index', compact('names', 'study_years'));
        // return view('site3.index', ['names' => $names]);
    }

    public function about()
    {
        return view('site3.about');
    }

    public function services()
    {
        return view('site3.services');
    }

    public function contact()
    {
        return view('site3.contact');
    }
}
