<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name',
    ];
    public function project()
    {
        return $this->hasOne(Project::class);
    }
    public function blog()
    {
        return $this->hasOne(Blog::class);
    }
}
