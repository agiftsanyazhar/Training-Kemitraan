<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            'Role' => 'Admin'
        ]);

        DB::table('roles')->insert([
            'Role' => 'Principal'
        ]);
        
        DB::table('roles')->insert([
            'Role' => 'Distributor'
        ]);
        
        DB::table('roles')->insert([
            'Role' => 'Agen'
        ]);
        
        DB::table('roles')->insert([
            'Role' => 'Reseller'
        ]);
        
        DB::table('roles')->insert([
            'Role' => 'Dropshipper'
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'admin',
            'username' => 'admin',
            'email' => 'adminkemitraanpkl@gmail.com',
            'id_role' => '1',
            'password' => 'admin123'
        ]);
    }
}
