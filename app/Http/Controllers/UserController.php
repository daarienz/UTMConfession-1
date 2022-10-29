<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Confession;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function updateProfileView(){
        return view('editProfile');
    }

    public function updateProfile(Request $request)
    {
        $user = User::find($request->id);
        
        $user->username = $request->username;
        $user->email = $request->email;
        $user->description = $request->description;
        
        $user->save();
            
        return Redirect('profile')->with('profileUpdated', 'Profile updated successfully !');
    }

    public function changePassword(Request $request)
    {
        $user = User::find($request->id);

        if ($request->oldPassword == $user->password) {
            if ($request->newPassword == $request->confirmNewPassword) {
                $user->password = $request->newPassword;
                $user->save();

                return redirect('profile')->with('passwordChanged', 'Password changed successfully !');
            } else
                return redirect('editProfile')->with('differentNewPassword', 'Confirm new password must be the same as new password !');
        } else
            return redirect('editProfile')->with('wrongPassword', 'Wrong Password !');
    }
}
