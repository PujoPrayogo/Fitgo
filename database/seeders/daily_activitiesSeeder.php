<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class daily_activitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('daily_activities')->insert([
            'user_id' => 6,
            'activity_name' => "Minum Air",
            'activity_amount' => 2,
            'time' => '14:31:18',
            'kcal' => 300,
        ]);
        DB::table('daily_activities')->insert([
            'user_id' => 6,
            'activity_name' => "Makan Nasi",
            'activity_amount' => 3,
            'time' => '14:31:18',
            'kcal' => 190,
        ]);
        DB::table('daily_activities')->insert([
            'user_id' => 6,
            'activity_name' => "Makan Bakso",
            'activity_amount' => 1,
            'time' => '14:31:18',
            'kcal' => 2,
        ]);
        DB::table('daily_activities')->insert([
            'user_id' => 6,
            'activity_name' => "Makan Nasgor",
            'activity_amount' => 2,
            'time' => '14:31:18',
            'kcal' => 120,
        ]);
    }
}
