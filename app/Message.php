<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $casts = [
        'created_at' => 'datetime:d.m.Y H:i',
    ];
}
