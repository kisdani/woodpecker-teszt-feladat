<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserListController extends Controller
{
    public function show()
    {
        $users = User::orderBy('name')->paginate(30);

        return view('pages/list', [
            "users" => $users,
        ]);
    }
}
