<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'eko',
            'email' => 'eko@gmail.com',
            'password' => Hash::make('eko'),
            'phone' => '08080808',
            'image' => 'default.jpg',
            'address' => 'Universitas Mulawarman',
            'role' => 'petani',
        ]);
        DB::table('users')->insert([
            'name' => 'ade',
            'email' => 'ade@gmail.com',
            'password' => Hash::make('ade'),
            'phone' => '08080808',
            'image' => 'default.jpg',
            'address' => 'Universitas Mulawarman',
            'role' => 'pedagang',
        ]);
    }
}
