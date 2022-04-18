<?php

namespace Database\Seeders;

use App\Models\pesanan;
use App\Models\transaksi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // pesanan id_transaksi 1
        $pesanan= new pesanan();
        $pesanan->jumlah_item = 3;
        $pesanan->id_oleh = 1;
        $pesanan->id_transaksi = 1;
        $pesanan->save();

        $pesanan= new pesanan();
        $pesanan->jumlah_item = 5;
        $pesanan->id_oleh = 2;
        $pesanan->id_transaksi = 1;
        $pesanan->save();

        $pesanan= new pesanan();
        $pesanan->jumlah_item = 3;
        $pesanan->id_oleh = 3;
        $pesanan->id_transaksi = 1;
        $pesanan->save();

        $transaksi= transaksi::find(1);
        $transaksi->total_harga= DB::table('transaksi')
            ->join('pesanan', 'transaksi.id', '=', 'pesanan.id_transaksi')
            ->join('oleh', 'pesanan.id_oleh','=','oleh.id')
            ->where('transaksi.id','=','1')
            ->sum(DB::raw('pesanan.jumlah_item*oleh.harga'));
        $transaksi->save();

        //pesanan id_transaksi 2
        $pesanan= new pesanan();
        $pesanan->jumlah_item = 5;
        $pesanan->id_oleh = 2;
        $pesanan->id_transaksi = 2;
        $pesanan->save();

        $pesanan= new pesanan();
        $pesanan->jumlah_item = 3;
        $pesanan->id_oleh = 1;
        $pesanan->id_transaksi = 2;
        $pesanan->save();

        $pesanan= new pesanan();
        $pesanan->jumlah_item = 3;
        $pesanan->id_oleh = 3;
        $pesanan->id_transaksi = 2;
        $pesanan->save();

        $transaksi= transaksi::find(2);
        $transaksi->total_harga= DB::table('transaksi')
            ->join('pesanan', 'transaksi.id', '=', 'pesanan.id_transaksi')
            ->join('oleh', 'pesanan.id_oleh','=','oleh.id')
            ->where('transaksi.id','=','2')
            ->sum(DB::raw('pesanan.jumlah_item*oleh.harga'));
        $transaksi->save();

        //pesanan id_transaksi 3
        $pesanan= new pesanan();
        $pesanan->jumlah_item = 7;
        $pesanan->id_oleh = 2;
        $pesanan->id_transaksi = 3;
        $pesanan->save();

        $transaksi= transaksi::find(3);
        $transaksi->total_harga= DB::table('transaksi')
            ->join('pesanan', 'transaksi.id', '=', 'pesanan.id_transaksi')
            ->join('oleh', 'pesanan.id_oleh','=','oleh.id')
            ->where('transaksi.id','=','3')
            ->sum(DB::raw('pesanan.jumlah_item*oleh.harga'));
        $transaksi->save();
        
        //pesanan id_transaksi 4
        $pesanan= new pesanan();
        $pesanan->jumlah_item = 10;
        $pesanan->id_oleh = 1;
        $pesanan->id_transaksi = 4;
        $pesanan->save();

        $transaksi= transaksi::find(4);
        $transaksi->total_harga= DB::table('transaksi')
            ->join('pesanan', 'transaksi.id', '=', 'pesanan.id_transaksi')
            ->join('oleh', 'pesanan.id_oleh','=','oleh.id')
            ->where('transaksi.id','=','4')
            ->sum(DB::raw('pesanan.jumlah_item*oleh.harga'));
        $transaksi->save();

        //pesanan id_transaksi 5
        $pesanan= new pesanan();
        $pesanan->jumlah_item = 8;
        $pesanan->id_oleh = 3;
        $pesanan->id_transaksi = 5;
        $pesanan->save();

        $transaksi= transaksi::find(5);
        $transaksi->total_harga= DB::table('transaksi')
            ->join('pesanan', 'transaksi.id', '=', 'pesanan.id_transaksi')
            ->join('oleh', 'pesanan.id_oleh','=','oleh.id')
            ->where('transaksi.id','=','5')
            ->sum(DB::raw('pesanan.jumlah_item*oleh.harga'));
        $transaksi->save();
    }
}
