<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $fillable = 
    [
        'title',
        'cost',
        'input_1',
        'input_2',
        'input_3',
        'input_4',
        'input_5',
    ];
}
