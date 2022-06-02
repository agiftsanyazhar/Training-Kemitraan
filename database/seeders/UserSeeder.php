<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama_lengkap' => 'admin',
            'username' => 'admin',
            'email' => 'adminkemitraanpkl@gmail.com',
            'id_role' => 'Admin',
            'password' => Hash::make('admin123')
        ]);
    }
}
