<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsertableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('user')->insert([
            'id_level'=>'1',
            'nama'=>'Wafa',
            'email'=>'nurulwaffa.app123@gmail.com',
            'password'=> Hash::make('123456')
        ]);

        
    }
}
