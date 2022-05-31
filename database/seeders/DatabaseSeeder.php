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
            'Higher_Role' => 'Null'
        ]);

        DB::table('roles')->insert([
            'Role' => 'Principal',
            'Higher_Role' => 'Admin'
        ]);
        
        DB::table('roles')->insert([
            'Role' => 'Distributor',
            'Higher_Role' => 'Principal'
        ]);
        
        DB::table('roles')->insert([
            'Role' => 'Agen',
            'Higher_Role' => 'Distributor'
        ]);
        
        DB::table('roles')->insert([
            'Role' => 'Reseller',
            'Higher_Role' => 'Agen'
        ]);
        
        DB::table('roles')->insert([
            'Role' => 'Dropshipper',
            'Higher_Role' => 'Reseller'
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'admin',
            'username' => 'admin',
            'email' => 'adminkemitraanpkl@gmail.com',
            'id_role' => '1',
            'password' => bcrypt('admin123')
        ]);
    }
}
