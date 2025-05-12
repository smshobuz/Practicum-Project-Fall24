<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model {
    use HasFactory;
    protected $fillable = ['name',
    'date_of_birth',
    'subscription_start',
    'subscription_end',
    'team_id',
    'performance_score', ];

    public function user() {
        return $this->belongsTo(Player::class);
    }

    public function team() {
        return $this->belongsTo(Team::class);
    }

    public function statistics() {
        return $this->hasOne(PlayerStatistic::class);
    }
    //date og birth 
    public static function assignTeam($player) {
        $age = Carbon::parse($player->user->date_of_birth)->age;
    
        $team = Team::where('min_age', '<=', $age)
                    ->where(function ($query) use ($age) {
                        $query->where('max_age', '>=', $age)
                              ->orWhereNull('max_age');
                    })->first();
    
        $player->team_id = $team->id;
        $player->save();
    }
    
}


