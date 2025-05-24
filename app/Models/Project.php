<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Project extends Model
{
    protected $fillable = [
        'client_name',
        'address',
        'date',
        'category_id',
        'title',
        'details',
        'experience',

    ];

    protected $casts = [
        'images' => 'array',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
