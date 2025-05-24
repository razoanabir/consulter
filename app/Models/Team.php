<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = 
    [
        'name',
        'designation',
        'work_description',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'linked_in_link',
        'email',
        'contact_number',
        'job_experience',
        'educational_experience',
    ];
}
