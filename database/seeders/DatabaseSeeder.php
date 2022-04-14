<?php

namespace Database\Seeders;

use App\Models\oleh;
use App\Models\admin;
use App\Models\pengguna;
use App\Models\pembayaran;
use Illuminate\Database\Seeder;
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

        //admin
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

        //pengguna
        $pengguna = new pengguna();
        $pengguna->username = 'eschreck';
        $pengguna->nama = 'esch reck';
        $pengguna->telepon = '081288818282';
        $pengguna->password = Hash::make('eshhrck');
        $pengguna->save();

        $pengguna = new pengguna();
        $pengguna->username = 'cliffhanger1988';
        $pengguna->nama = 'cliff hanger';
        $pengguna->telepon = '081288818283';
        $pengguna->password = Hash::make('clifs');
        $pengguna->save();

        $pengguna = new pengguna();
        $pengguna->username = 'babaksabri';
        $pengguna->nama = 'babak sabri';
        $pengguna->telepon = '081288818284';
        $pengguna->password = Hash::make('babaksa');
        $pengguna->save();
        
        $pengguna = new pengguna();
        $pengguna->username = 'and117333';
        $pengguna->nama = 'andy sabri';
        $pengguna->telepon = '081288818285';
        $pengguna->password = Hash::make('and1173');
        $pengguna->save();

        $pengguna = new pengguna();
        $pengguna->username = 'katgen';
        $pengguna->nama = 'katgen sabri';
        $pengguna->telepon = '081288818286';
        $pengguna->password = Hash::make('katge');
        $pengguna->save();

        $pengguna = new pengguna();
        $pengguna->username = 'clcvulb';
        $pengguna->nama = 'clcvulb sabri';
        $pengguna->telepon = '081288818287';
        $pengguna->password = Hash::make('clcvu');
        $pengguna->save();

        //oleh
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

        //pemesanan

        //pembayaran

    }
}
