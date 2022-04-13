<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;

class penggunaController extends Controller
{
    public function index(){
        $data_pengguna=pengguna::all();
        return view('tablePengguna',compact('data_pengguna'));
    }
}
