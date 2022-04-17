<?php

namespace App\Http\Controllers\transaksi;

use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class belumBayarController extends Controller
{
    public function index(){
        return view('transaksi.table-belumDiBayar',[
            'title' =>'Transaksi - Belum Bayar',
            'transaksis' => transaksi::where('status','Belum Bayar')->get()
        ]);
    }
    public function view($id){
    $pesanans=DB::table('pesanan')
        ->join('oleh', 'pesanan.id_oleh','=','oleh.id')
        ->where('id_transaksi','=',$id)
        ->get();
    //$pesanans = pesanan::where('id_transaksi',$id)->get();
        return view('tablePemesanan',[
            'title' => 'Pesanan',
            'transaksi'=>transaksi::find($id),
            'pesanans' => $pesanans,
            'countPesanans' => $pesanans->count()
        ]);
    }
}
