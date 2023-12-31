<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password123'),  // menggunakan bcrypt untuk menghash password
                'role' => 'admin',
            ],
            [
                'name' => 'adminpajak',
                'email' => 'simpak.setdakh@gmail.com',
                'password' => bcrypt('@setda2023'),
                'role' => 'admin',  // sesuaikan role jika perlu
            ]
        ]);
    }
}