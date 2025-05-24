<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title',
        'details',
        'skill_1',
        'skill_2',
        'skill_3',
        'expertice_at_skill_1',
        'expertice_at_skill_2',
        'expertice_at_skill_3',
        'video_link',
        'successful_project',
        'expert_consulter',
        'cup_of_coffee',
        'client_satisfection',
        'success_project',
        'our_experience',
       ];
}
