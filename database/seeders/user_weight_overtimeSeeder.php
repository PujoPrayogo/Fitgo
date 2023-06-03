<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user_weight_overtimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_weight_overtime')->insert([
            'user_id' => 6,
            'weight_atm' => 70,
            'created_at' => '2023-05-02 02:17:16',
        ]);

        DB::table('user_weight_overtime')->insert([
            'user_id' => 6,
            'weight_atm' => 69,
            'created_at' => '2023-05-08 02:17:16',
        ]);

        DB::table('user_weight_overtime')->insert([
            'user_id' => 6,
            'weight_atm' => 65,
            'created_at' => '2023-05-16 02:17:16',
        ]);

        DB::table('user_weight_overtime')->insert([
            'user_id' => 6,
            'weight_atm' => 63,
            'created_at' => '2023-05-24 02:17:16',
        ]);

        DB::table('user_weight_overtime')->insert([
            'user_id' => 6,
            'weight_atm' => 63,
            'created_at' => '2023-05-30 02:17:16',
        ]);
        DB::table('user_weight_overtime')->insert([
            'user_id' => 6,
            'weight_atm' => 64,
            'created_at' => '2023-06-05 02:17:16',
        ]);
        DB::table('user_weight_overtime')->insert([
            'user_id' => 6,
            'weight_atm' => 65,
            'created_at' => '2023-06-14 02:17:16',
        ]);
    }
}
