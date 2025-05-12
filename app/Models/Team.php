<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {
    protected $fillable = ['name', 'min_age', 'max_age', 'subscription_fee'];

    public function players() {
        return $this->hasMany(Player::class);
    }
}

