<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }

    // $x = 5;

    public function form1Submit(Request $request)
    {
        // $GLOBALS['x'];
        // global $x;
        // dd($_SERVER); // die & dump

        // $GLOBALS
        // $_SERVER
        // $_ENV
        // $_REQUEST
        // $_POST
        // $_GET
        // $_FILES
        // $_SESSION
        // $_COOKIE

        dd($request->email);

        return 'Done';
    }
}
