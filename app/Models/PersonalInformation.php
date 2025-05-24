<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    protected $fillable = [
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'linked_in_link',
        'contact_number',
        'email',
        'address',
        'google_map_location',
        'working_time',
        'weekly_holiday',
    ];
}
