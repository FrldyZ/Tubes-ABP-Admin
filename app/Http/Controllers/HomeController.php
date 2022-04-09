<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard(){
        //if (Auth::guard('admin')->check()) return view('index');
        //return redirect('/login');
        return view('index', [
            'title'=> 'Dashboard'
        ]);
        
    }

    public function viewOleh(){
        return view('tableOleh',[
            'title'=> 'Daftar Oleh'
        ]);
    }
}
