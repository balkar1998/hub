<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientChatting extends Model
{
    use HasFactory;

    protected $table ='clientchatting';

    protected $fillable = [
        'sender_id',
        'reciver_id',
        'sender_message',
        'reciver_message'
    ];
}
