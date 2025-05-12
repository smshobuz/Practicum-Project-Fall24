<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerStatistic extends Model {
    protected $fillable = ['player_id', 'matches_played', 'goals_scored', 'assists'];

    public function player() {
        return $this->belongsTo(Player::class);
    }
}

