<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site2Controller extends Controller
{
    public function home()
    {
        // $data = [1,5,4,7,5,6,8];

        // foreach($data as $b) {
        //     echo "$b<br>";
        // }

        // echo 5 + 20;

        // echo "<br>";

        $name = "Mohammed";
        $age = 27;

        // return view('site2')->with('name', $name)->with('age', $age);
        // return view('site2', compact('name', 'age'));
        return view('site2', [
            'name' => $name,
            'age' => $age
        ]);
    }

    public function about()
    {
        return "site2 about page";
    }

    // public function services()
    // {
    //     return "site2 services page";
    // }

    public function single_service($name = null)
    {
        return 'Single Serveice ' . $name;
    }

    public function contact()
    {
        return "site2 contact page";
    }




}
