<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'profession',
        'image',
        'star',
        'review',
        'video_url',
    ];
}
