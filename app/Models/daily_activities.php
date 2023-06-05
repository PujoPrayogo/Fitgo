<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daily_activities extends Model
{
    use HasFactory;

    protected $table = "daily_activities";
    protected $fillable = ["user_id", "activity_name", "activity_amount", "time","kcal"];
}
