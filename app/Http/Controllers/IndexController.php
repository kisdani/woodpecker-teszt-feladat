<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        return view('main');
    }

    public function login()
    {
        return view('pages/login');
    }
}
