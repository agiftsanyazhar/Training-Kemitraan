<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'Role' => 'Admin',
            // 'Lower_role' => '2',
            'level' => '1'
        ]);

        DB::table('roles')->insert([
            'Role' => 'Principal',
            // 'Higher_role' => '1',
            // 'Lower_role' => '3',
            'level' => '2'
        ]);
        
        DB::table('roles')->insert([
            'Role' => 'Distributor',
            // 'Higher_role' => '2',
            // 'Lower_role' => '4',
            'level' => '3'
        ]);
        
        DB::table('roles')->insert([
            'Role' => 'Agen',
            // 'Higher_role' => '3',
            // 'Lower_role' => '5',
            'level' => '4'
        ]);
        
        DB::table('roles')->insert([
            'Role' => 'Reseller',
            // 'Higher_role' => '4',
            // 'Lower_role' => '6',
            'level' => '5'
        ]);
        
        DB::table('roles')->insert([
            'Role' => 'Dropshipper',
            // 'Higher_role' => '5',
            'level' => '6'
        ]);

    }
}
