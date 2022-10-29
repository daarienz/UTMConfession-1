<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Confession;
use App\Models\Comments;
use App\Models\User;

class ConfessionListController extends Controller
{
    public function generalConfession(){
        $confession = Confession::all()->sortByDesc('created_at');

        return view("home", [
            "confession" => $confession,
        ]);
    }

    public function mostComments(){
        return view("home");
    }

    public function mostLiked(){
        $confession = Confession::all()->sortByDesc('numberOfLikes');

        return view("home", [
            "confession" => $confession
        ]);
    }

    public function mostDisliked(){
        $confession = Confession::all()->sortByDesc('numberOfDislikes');

        return view("home", [
            "confession" => $confession
        ]);
    }

    public function authConfession(){
        $confession = Confession::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();

        return view("userConfession", [
            "confession" => $confession
        ]);
    }

    public function like(Request $request){
        $confession = Confession::where('user_id', Auth::id())->get();

        $confession->numberOfLikes = $request->like;
        $confession->save();
    }

    public function deleteConfession(){

    }
} 
