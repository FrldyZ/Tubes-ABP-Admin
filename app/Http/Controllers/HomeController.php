<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function dashboard(){
        //if (Auth::guard('admin')->check()) return view('index');
        //return redirect('/login');
        $regAdmin = DB::table('admin')->count();
        $regUser = DB::table('pengguna')->count();
        $regOleh = DB::table('oleh')->count();

        return view('index', [
            'title'=> 'Dashboard',
            'regAdmin'=>$regAdmin,
            'regUser'=>$regUser,
            'regOleh'=>$regOleh
        ]);
        
    }
}
