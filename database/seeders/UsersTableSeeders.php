<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => " daff42342a",
            "email" => "email1654rrrr22@gmail.com",
            "password" => Hash::make('123456'),
            "age" => 20,
            "height" => 160,
            "bodyweight" => 60,
            "gender" => "male",
            "bodygoals" => "gain weight",
        ]);

        DB::table('users')->insert([
            'name' => " daf2342fa",
            "email" => "email432133@gmail.com",
            "password" => Hash::make('123456'),
            "age" => 20,
            "height" => 160,
            "bodyweight" => 60,
            "gender" => "male",
            "bodygoals" => "gain weight",
        ]);

        DB::table('users')->insert([
            'name' => " daf3242fa",
            "email" => "emailgsge1fesfse22@gmail.com",
            "password" => Hash::make('123456'),
            "age" => 20,
            "height" => 160,
            "bodyweight" => 60,
            "gender" => "male",
            "bodygoals" => "gain weight",
        ]);

        DB::table('users')->insert([
            'name' => " da324ffa",
            "email" => "emailfsefs13@gmail.com",
            "password" => Hash::make('123456'),
            "age" => 20,
            "height" => 160,
            "bodyweight" => 60,
            "gender" => "male",
            "bodygoals" => "gain weight",
        ]);

        DB::table('users')->insert([
            'name' => " daff423a",
            "email" => "email342424@gmail.com",
            "password" => Hash::make('123456'),
            "age" => 20,
            "height" => 160,
            "bodyweight" => 60,
            "gender" => "male",
            "bodygoals" => "gain weight",
        ]);

        DB::table('users')->insert([
            'name' => " daff342a",
            "email" => "emailfsefsd3@gmail.com",
            "password" => Hash::make('123456'),
            "age" => 20,
            "height" => 160,
            "bodyweight" => 60,
            "gender" => "male",
            "bodygoals" => "gain weight",
        ]);
    }
}
