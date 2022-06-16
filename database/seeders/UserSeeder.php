<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

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
            'id_role' => '1',
            'join_date' => Carbon::now()->format('Y-m-d'),
            'alamat' => 'Surabaya',
            'password' => bcrypt('admin123'),
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'testing',
            'username' => 'testing',
            'email' => 'testingkemitraanpkl@gmail.com',
            'id_role' => '2',
            'join_date' => Carbon::now()->format('Y-m-d'),
            'alamat' => 'Surabaya',
            'password' => bcrypt('testing123'),
            'registered_by' => '1'
        ]);
    }
}
