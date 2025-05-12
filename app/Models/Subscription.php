<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = ['player_id', 'start_date', 'end_date', 'status'];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}

