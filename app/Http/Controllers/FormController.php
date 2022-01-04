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


    public function form2()
    {
        return view('forms.form2');
    }

    public function form2Submit(Request $request)
    {
        // dd($request->except('_token'));

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $name = $request->first_name . ' ' . $request->last_name;
        $email = $request->email;
        $password = $request->password;

        return view('forms.form2data', compact('name', 'email', 'password'));
    }

    public function form3()
    {
        return view('forms.form3');
    }

    public function form3Submit(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'phone'   => 'required',
            'doctor'  => 'required',
            'day'     => 'required',
            'time'    => 'required',
            'country' => 'required',
        ]);


        return 'Done';
    }
}
