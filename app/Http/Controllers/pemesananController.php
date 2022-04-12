<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use Illuminate\Http\Request;

class pemesananController extends Controller
{
    public function index(){
        return view('tablePemesanan',[
            'title'=> 'Pemesanan',
            'pemesanan' => pemesanan::all()
        ]);
    }
}
