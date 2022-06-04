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
            'Role' => 'Admin',
            'Lower_role' => '2'
        ]);

        DB::table('roles')->insert([
            'Role' => 'Principal',
            'Higher_role' => '1',
            'Lower_role' => '3'
        ]);
        
        DB::table('roles')->insert([
            'Role' => 'Distributor',
            'Higher_role' => '2',
            'Lower_role' => '4'
        ]);
        
        DB::table('roles')->insert([
            'Role' => 'Agen',
            'Higher_role' => '3',
            'Lower_role' => '5'
        ]);
        
        DB::table('roles')->insert([
            'Role' => 'Reseller',
            'Higher_role' => '4',
            'Lower_role' => '6'
        ]);
        
        DB::table('roles')->insert([
            'Role' => 'Dropshipper',
            'Higher_role' => '5'
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'admin',
            'username' => 'admin',
            'email' => 'adminkemitraanpkl@gmail.com',
            'id_role' => '1',
            'password' => bcrypt('admin123'),
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'testing',
            'username' => 'testing',
            'email' => 'testingkemitraanpkl@gmail.com',
            'id_role' => '2',
            'password' => bcrypt('testing123'),
            'registered_by' => '1'
        ]);
    }
}
