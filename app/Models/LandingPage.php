<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    
    protected $fillable = [
        'title',
        'details',
        'website_title',
        'website_icon',
       ];
}
