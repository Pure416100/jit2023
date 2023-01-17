<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_day2 extends Model
{
    protected $fillable = [
        'color_feel_today',
        'sensation_level',
        'detail_t1',
        'rounds_id',
    ];
    public $timestamps = false;
    protected $table = 'day2';

public function diary_day()
{
    return $this->belongsTo(rounds_completed::class, 'rounds_id');
}
}