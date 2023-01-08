<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t1',
        'rounds_completed',
    ];
    public $timestamps = false;
    protected $table = 'day1';
}
