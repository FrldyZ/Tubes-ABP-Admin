<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class transaksiController extends Controller
{
    public function index(){
        return view('tableTransaksi',[
            'title'=> 'transaksi',
            'transaksi' => transaksi::all()
        ]);
    }
}
