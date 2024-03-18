<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remainder extends Model
{
    use HasFactory;

    protected $fillable = [
        'remainder_message',
        'created_time',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    }