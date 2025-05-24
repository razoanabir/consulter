<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodaysExpense extends Model
{
    protected $fillable = [
        'title',
        'amount',
        'note',
    ];
}
