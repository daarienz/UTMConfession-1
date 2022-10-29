<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Confession;
use App\Models\User;

class ConfessionController extends Controller
{
    public function confessPage(){
        return view('confess');
    }

    public function addAnonymousConfession(Request $request){

        $user = User::where('id', Auth::id())->first();
        $confession = new Confession;

        
        if(Auth::check()){
            $confession->confession = $request->confession;
            $confession->user_id = $user->id;
            $confession->username = $user->username;
            $confession->save();
        }
        else{
            $confession->confession = $request->confession;
            $confession->save();
        }

        

        return Redirect('home')->with('confessUploaded', 'Confession uploaded successfully !');
    }
}
