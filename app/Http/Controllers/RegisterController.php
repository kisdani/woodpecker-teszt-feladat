<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerForm(){
        return view('pages/register');
    }

    public function registerPost(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->save();

        $request->session()->flash('registered', 1);
        return redirect('login');
    }
}
