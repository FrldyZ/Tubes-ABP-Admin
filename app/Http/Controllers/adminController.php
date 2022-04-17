<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        $data_admin=admin::all();
        return view('tableAdmin',compact('data_admin'));
    }
}
