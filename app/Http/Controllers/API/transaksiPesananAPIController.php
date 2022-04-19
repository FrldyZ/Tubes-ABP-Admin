<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\oleh;
use App\Models\pesanan;
use App\Models\transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class transaksiPesananAPIController extends Controller
{
    public function tambah(Request $request){
        $transaksi = new transaksi();
        $transaksi->username_pengguna = $request->username_pengguna;
        $transaksi->tanggal_dipesan = Carbon::now()->toDateString();
        $transaksi->status = 'belum dibayar';
        $transaksi->save();

        $total_harga = 0;
        foreach($request->pesanan as $pesanan){
            $newPesanan = new pesanan();
            $newPesanan->id_transaksi = $transaksi->id;
            $newPesanan->id_oleh = $pesanan['id_oleh'];
            $newPesanan->jumlah_item = $pesanan['jumlah_item'];
            $newPesanan->save();
            $total_harga += $pesanan['jumlah_item'] * oleh::find($newPesanan->id_oleh)->harga;
        }

        $transaksi->total_harga = $total_harga;
        $transaksi->save();

        return ["Hasil"=>"Transaksi telah dibuat dengan id ".$transaksi->id];
    }
}
