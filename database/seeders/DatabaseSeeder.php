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
            'username' => 'wahyu',
            'password' => Hash::make('1'),
            'telp' => '0822665073626',
            'level' => 'admin',
         ]);
    }
}
