<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentDue extends Model
{
    protected $fillable = [
        'title',
        'total_amount',
        'paid_amount',
        'note',
    ];
}
