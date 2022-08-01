<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        // \App\Models\User::factory(10)->create();

        // akun admin
        DB::table('users')->insert([
            'nik' => '11111',
            'name' => 'wahyuadmin',
            'email' => 'wahyuadmin@gmail.com',
            'phone' => '085335249308',
            'password' => Hash::make('wahyuadmin'),
            'roles' => 'ADMIN',
        ]);
    }
}
