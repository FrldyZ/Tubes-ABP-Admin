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
        $user = new admin();
        $user->email = 'kevin@mail.com';
        $user->username = 'kevin';
        $user->password = Hash::make('12345');
        $user->save();

        $user = new admin();
        $user->email = 'kris@mail.com';
        $user->username = 'kris';
        $user->password = Hash::make('67891');
        $user->save();

        $user = new admin();
        $user->email = 'imam@mail.com';
        $user->username = 'imam';
        $user->password = Hash::make('45678');
        $user->save();

        //oleh

        //pemesanan

        //pembayaran
        
    }
}
