<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TasksAssign extends Model
{
    use HasFactory;
    protected $fillable = [
        'task_id',
        'assistant_id',
        'client_id'
    ];
}
