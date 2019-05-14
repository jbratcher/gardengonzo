<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function registerUser()
    {
        return view('register');
    }

    public function postUser(Request $request)
    {
        $user = new User();
        $user->fill(
            $request->except('_token')
        )->save();

        return redirect('/register')
            ->with('success', 'Thank you for submitting your info!');
    }
}
