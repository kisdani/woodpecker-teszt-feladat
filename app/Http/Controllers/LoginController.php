<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request){

        $registered = $request->session()->get('registered');

        return view('pages/login',["registered"=>$registered]);
    }
}
