<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::whereEmail($request->email)->first();

        if($user){
            if($request->password == $user->password){
                Auth::login($user);

                return redirect('home');
            }
            else
                return redirect('login')->with('wrongPassword', 'wrongPassword');
        }
        else{
            return redirect('login')->with('error', 'Login failed');
        }
    }
}
