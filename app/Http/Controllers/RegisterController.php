<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\admin;

class RegisterController extends Controller
{
    public function index()
    {

        return view('register.index', [
            'title'=> 'Register',
            'active' => 'register'
        ]);

    }

    public function registerUser(Request $request)
    {

        $request->validate([
            'email'=>'required| email| unique:admin', //unique:users
            'username'=>'required',
            'password'=>'required'
        ]);

        $user = new admin();
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res)
        {
            return back()->with('Success', 'You have registered succesfully');
        }else{
            return back()->with('Fail', 'Something wrong');
        }
        
    }
}
