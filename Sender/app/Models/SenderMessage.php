<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SenderMessage extends Model
{
    use HasFactory;
    protected $table = 'sender_messages';
    protected $fillable = [
        'user_id',
        'title',
        'type',
        'sender_message',
    ];

}
