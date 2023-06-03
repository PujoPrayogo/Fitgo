<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_weight_overtime extends Model
{
    use HasFactory;

    protected $table = "user_weight_overtime";
    protected $fillable = ["weight_atm"];
}
