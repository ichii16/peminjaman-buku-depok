<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Buat user admin
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin123'),
            'phone' => '08123456789',
            'address' => 'Alamat Admin',
            'status' => 'active',
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}