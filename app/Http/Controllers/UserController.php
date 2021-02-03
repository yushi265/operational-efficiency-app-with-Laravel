<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function admin_index()
    {
        $users = User::all();
        return view('users.admin_index')->with('users', $users);
    }

    public function admin_set(Request $request)
    {
        $users = User::all();
        foreach ($users as $user) {
            $user->role = $request->input('user_admin_'.$user->id);
            $user->save();
        }
        return redirect()->back();
    }
}
