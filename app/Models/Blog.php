<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'details',
        'author',
        'category_id',
        'personal_note',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
