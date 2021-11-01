<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistantprofile extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'profilepicture',
        'video',
        'describe',
        'working_hours',
        'prefer_timezone',
        'equipment',
        'specialization',
        'skills',
        'github_url',
        'resume',
        'session',
        'quiz',
    ];
}
