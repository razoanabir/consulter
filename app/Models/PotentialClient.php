<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PotentialClient extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'client_name',
        'phone_number',
        'email',
        'company_name',
        'follow_up_date',
        'note',
    ];
}
