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

    public function form4()
    {
        return view('forms.form4');
    }

    public function form4Submit(Request $request)
    {
        // $name = time() . rand() . $request->file('image')->getClientOriginalName();
        $ex = $request->file('image')->getClientOriginalExtension();
        $name = 'vision4_'.time().'_'.rand().'.'.$ex; // vision4_5454655654646466.png
        $request->file('image')->move(public_path('uploads/images'), $name);

    }


    public function form5()
    {
        return view('forms.form5');
    }

    public function form5Submit(Request $request)
    {
        $request->validate([
            //'name' => 'required|min:3',
            'name' => ['required', 'min:3'],
            // 'cv' => 'required|mimes:pdf|max:5120'
            'cv' => 'required'
        ]);

        // dd($request->all());

        foreach($request->file('cv') as $item) {
            $name = time().rand().$item->getClientOriginalName();
            $item->move(public_path('uploads/files'), $name);
        }

        return 'Thanks';
    }
}
