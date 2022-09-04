<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserListController extends Controller
{
    public function list()
    {
        return view('pages/list');
    }
}
