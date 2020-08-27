<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('auth.passwords.change');
    }

    public function changePassword(Request $request){
        $this->validate($request, [
            'oldpassword' => 'required',
            'password' => 'required | confirmed'
        ] );

        /*var_dump(Auth::user());
        die();*/
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)){
            $user = User::find(Auth::id());
            $user->password =Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('successMsg', "Your password has been changed successfully");
        }else return redirect()->back()->with('errorMsg',"current password is incorrect");
    }
}
