<?php

use App\Models\Player;
use App\Models\Team;
use Carbon\Carbon;

Player::factory(20)->create()->each(function ($player) {
    $player->team_id = Team::inRandomOrder()->first()->id;
    $player->save();
});

