<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
           [ "name" => "kevin",
            "email"=> "kevin@outlook.com",
            "password" =>Hash::make('Testtest123'),
            "role_id" => 1,
            "created_at" => now()
            ],
            [ "name" => "kevino",
            "email"=> "kevino@outlook.com",
            "password" =>Hash::make('testtest'),
            "role_id" => 2,
            "created_at" => now()
            ],

        ]);
    }
}
