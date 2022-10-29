<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function store()
    {
        $attributes = User::create(request()->validate([
            'username' => 'required',
            'password' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'description' => 'required',            
        ]));

        auth()->login($attributes);

        return redirect('login')->with('registerSuccess', 'Registration success ! You can login now !');
    }
}
