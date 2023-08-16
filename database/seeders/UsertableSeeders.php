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
            'nama' => 'Wafa',
            'email' => 'nurulwaffa.app123@gmail.com',
            'password' => Hash::make('123456'),
            'email_verified_at' => date("Y-m-d"),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);

        // DB::table('user')->insert([
        //     'id_level' => '2',
        //     'nama' => 'Aldo Cahyadi',
        //     'email' => 'aldo@gmail.com',
        //     'password' => Hash::make('123456'),
        //     'email_verified_at' => date("Y-m-d"),
        //     'created_at' => date("Y-m-d"),
        //     'updated_at' => date("Y-m-d")
        // ]);

        // DB::table('user')->insert([
        //     'id_level' => '2',
        //     'nama' => 'Dicky Saputra',
        //     'email' => 'dicky@gmail.com',
        //     'password' => Hash::make('123456'),
        //     'email_verified_at' => date("Y-m-d"),
        //     'created_at' => date("Y-m-d"),
        //     'updated_at' => date("Y-m-d")
        // ]);

        // DB::table('user')->insert([
        //     'id_level' => '2',
        //     'nama' => 'Randi Martin',
        //     'email' => 'randim@gmail.com',
        //     'password' => Hash::make('123456'),
        //     'email_verified_at' => date("Y-m-d"),
        //     'created_at' => date("Y-m-d"),
        //     'updated_at' => date("Y-m-d")
        // ]);

        // DB::table('user')->insert([
        //     'id_level' => '2',
        //     'nama' => 'Angga Yunanda',
        //     'email' => 'angga@gmail.com',
        //     'password' => Hash::make('123456'),
        //     'email_verified_at' => date("Y-m-d"),
        //     'created_at' => date("Y-m-d"),
        //     'updated_at' => date("Y-m-d")
        // ]);

        // DB::table('user')->insert([
        //     'id_level' => '2',
        //     'nama' => 'Farel Bramasta',
        //     'email' => 'farel@gmail.com',
        //     'password' => Hash::make('123456'),
        //     'email_verified_at' => date("Y-m-d"),
        //     'created_at' => date("Y-m-d"),
        //     'updated_at' => date("Y-m-d")
        // ]);

        // DB::table('user')->insert([
        //     'id_level' => '2',
        //     'nama' => 'Juno',
        //     'email' => 'juno@gmail.com',
        //     'password' => Hash::make('123456'),
        //     'email_verified_at' => date("Y-m-d"),
        //     'created_at' => date("Y-m-d"),
        //     'updated_at' => date("Y-m-d")
        // ]);

        // DB::table('user')->insert([
        //     'id_level' => '2',
        //     'nama' => 'Prima Alamsyah',
        //     'email' => 'prima@gmail.com',
        //     'password' => Hash::make('123456'),
        //     'email_verified_at' => date("Y-m-d"),
        //     'created_at' => date("Y-m-d"),
        //     'updated_at' => date("Y-m-d")
        // ]);
    }
}
