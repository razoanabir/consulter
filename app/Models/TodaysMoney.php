<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodaysMoney extends Model
{
    protected $fillable = [
        'title',
        'amount',
        'note',
    ];
}
