<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('level')->insert([
            'level_name'=>'Admin',
            'created_at'=>date("Y-m-d"),
            'updated_at'=>date("Y-m-d")
        ]);

         DB::table('level')->insert([
            'level_name'=>'User',  
            'created_at'=>date("Y-m-d"),
            'updated_at'=>date("Y-m-d")
        ]);

        
    }
}
