<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventApplication extends Model
{
    use HasFactory;

    protected $fillable = ['event_id', 'player_id'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id');
    }
}

