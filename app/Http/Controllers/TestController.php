<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index () {
        return 'this is test message from web route file';
    }
}
