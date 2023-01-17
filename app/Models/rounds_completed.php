<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rounds_completed extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'jobs_id',
        'rounds',
        'score',
    ];
    protected $table = 'rounds_completed';

    public function rounds_completed()
{
    
    return $this->hasMany(diary_day::class,'rounds_id','id');
}
}
