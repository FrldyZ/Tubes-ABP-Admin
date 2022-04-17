<?php

namespace Database\Seeders;

use App\Models\oleh;
use App\Models\admin;
use App\Models\pesanan;
use App\Models\pengguna;
use App\Models\transaksi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // admin
        $admin = new admin();
        $admin->email = 'kevin@mail.com';
        $admin->username = 'kevin';
        $admin->password = Hash::make('12345');
        $admin->save();

        $admin = new admin();
        $admin->email = 'kris@mail.com';
        $admin->username = 'kris';
        $admin->password = Hash::make('67891');
        $admin->save();

        $admin = new admin();
        $admin->email = 'imam@mail.com';
        $admin->username = 'imam';
        $admin->password = Hash::make('45678');
        $admin->save();

        // pengguna
        $pengguna = new pengguna();
        $pengguna->username = 'macwill';
        $pengguna->nama = 'Cormac William';
        $pengguna->telepon = '081288818282';
        $pengguna->password = Hash::make('macwi');
        $pengguna->save();

        $pengguna = new pengguna();
        $pengguna->username = 'cliffhanger1988';
        $pengguna->nama = 'Cliff Hanger';
        $pengguna->telepon = '081288818283';
        $pengguna->password = Hash::make('clifs');
        $pengguna->save();

        $pengguna = new pengguna();
        $pengguna->username = 'babaksabri';
        $pengguna->nama = 'Babak Sabri';
        $pengguna->telepon = '081288818284';
        $pengguna->password = Hash::make('babaksa');
        $pengguna->save();
        
        $pengguna = new pengguna();
        $pengguna->username = 'josbarr';
        $pengguna->nama = 'Joseff Barry';
        $pengguna->telepon = '081288818285';
        $pengguna->password = Hash::make('ffbarr');
        $pengguna->save();

        $pengguna = new pengguna();
        $pengguna->username = 'hencle';
        $pengguna->nama = 'Kohen Clements';
        $pengguna->telepon = '081288818286';
        $pengguna->password = Hash::make('clement');
        $pengguna->save();

        $pengguna = new pengguna();
        $pengguna->username = 'diabbs';
        $pengguna->nama = 'Sadia Gibbs';
        $pengguna->telepon = '081288818287';
        $pengguna->password = Hash::make('sadbbs');
        $pengguna->save();

        // oleh
        $oleh = new oleh();
        $oleh->nama = 'Bakpia';
        $oleh->gambar = 'gambarOleh/hz3HEw6GbQxA0iv4I2tjJjQ5Vd84BuzCL8u63XBV.png';
        $oleh->deskripsi = 'Bakpia adalah makanan yang terbuat dari campuran kacang hijau dengan gula yang dibungkus dengan tepung lalu dipanggang.';
        $oleh->harga = 35000;
        $oleh->terjual = 0;
        $oleh->save();

        $oleh = new oleh();
        $oleh->nama = 'Pie Susu';
        $oleh->gambar = 'gambarOleh/qoJSuOVjWxeA5P5rXmPIqQ0ktu6jayLBk85lOlOi.png';
        $oleh->deskripsi = 'Pie susu adalah sebuah pastri hidangan penutup tradisional Indonesia yang terbuat dari kue pastri yang diisi dengan kustar telur serta susu kental manis. Pastri tersebut sangat datar dengan isian hanya terdiri dari satu lapisan kustar yang sangat tipis.';
        $oleh->harga = 15000;
        $oleh->terjual = 0;
        $oleh->save();

        $oleh = new oleh();
        $oleh->nama = 'Dodol Garut';
        $oleh->gambar = 'gambarOleh/tw2Qix9qniFOMDe7O4V43NPN38j6XLwqr7ML7h2u.png';
        $oleh->deskripsi = 'Dodol Garut merupakan makanan tradisional berbahan dasar tepung beras ketan atau buah-buahan, gula, dan santan kelapa sebagai bahan baku utamanya yang dimasak hingga kental-lengket.';
        $oleh->harga = 5000;
        $oleh->terjual = 0;
        $oleh->save();

        // transaksi
        $transaksi = new transaksi();
        $transaksi->username_pengguna = 'babaksabri';
        $transaksi->tanggal_dipesan = '2022-04-15';
        $transaksi->status='batal';
        $transaksi->save();

        $transaksi = new transaksi();
        $transaksi->username_pengguna = 'macwill';
        $transaksi->tanggal_dipesan = '2022-04-16';
        $transaksi->status='belum dibayar';
        $transaksi->save();

        $transaksi = new transaksi();
        $transaksi->username_pengguna = 'diabbs';
        $transaksi->tanggal_dipesan = '2022-04-23';
        $transaksi->tanggal_dibayar = '2022-04-23';
        $transaksi->status='belum diambil';
        $transaksi->save();

        $transaksi = new transaksi();
        $transaksi->username_pengguna = 'hencle';
        $transaksi->tanggal_dipesan = '2022-05-10';
        $transaksi->tanggal_dibayar = '2022-05-10';
        $transaksi->status='sudah diambil';
        $transaksi->save();

        $transaksi = new transaksi();
        $transaksi->username_pengguna = 'josbarr';
        $transaksi->tanggal_dipesan = '2022-05-17';
        $transaksi->status='belum dibayar';
        $transaksi->save();

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

        //

        $pesanan= new pesanan();
        $pesanan->jumlah_item = 7;
        $pesanan->id_oleh = 2;
        $pesanan->id_transaksi = 3;
        $pesanan->save();
        
        $pesanan= new pesanan();
        $pesanan->jumlah_item = 10;
        $pesanan->id_oleh = 1;
        $pesanan->id_transaksi = 4;
        $pesanan->save();

        $pesanan= new pesanan();
        $pesanan->jumlah_item = 8;
        $pesanan->id_oleh = 3;
        $pesanan->id_transaksi = 5;
        $pesanan->save();

    }
}
