<?php

namespace App\Http\Controllers\transaksi;

use App\Models\pesanan;
use App\Models\transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class batalController extends Controller
{
    public function index(){
        $transaksis = transaksi::where('status','batal')->get();
        foreach ($transaksis as $transaksi){
            $pesanans = pesanan::where('id_transaksi',$transaksi->id)->get();
        }
        return view('transaksi.table-batal',[
            'title' =>'Transaksi - Batal',
            'transaksis' => $transaksis,
            'pesanans' => $pesanans
        ]);
    }
}
