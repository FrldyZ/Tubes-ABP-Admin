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

        //pemesanan

        //pembayaran



    }
}
