<?php

namespace App\Console\Commands;

use App\Models\daily_activities;
use Illuminate\Console\Command;

class ResetDailyActivities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:reset-daily-activities';
    protected $signature = 'activities:reset';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset daily activities';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        daily_activities::whereDate('created_at', '<', now()->startOfDay())->delete();

        $this->info('Daily activities have been reset.');
    }
}
