<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserListController extends Controller
{
    public function show(Request $request)
    {
        $users = User::orderBy('name')->paginate(5);
        $added = $request->session()->get('added');

        return view('pages/list', [
            "users" => $users,
            "added"=>$added,
        ]);
    }

    public function registerPost(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->save();

        $request->session()->flash('added', 1);
        return redirect('list');
    }
}
