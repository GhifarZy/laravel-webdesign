<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_level')->insert([
            'username' => 'admin',
            'password' => Hash::make('rahasia'),
            'level' => 'admin',
            'status' => 'aktif',
        ]);
    }
}
