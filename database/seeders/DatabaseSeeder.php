<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //buat user admin/petugas


         \App\Models\Petugas::create([
            'nama_petugas' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'telp' => '085335249308',
            'level' => 'admin',
         ]);
    }
}
