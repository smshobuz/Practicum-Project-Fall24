<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('playing_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('match_name');
            $table->string('team_one');
            $table->string('team_two');
            $table->date('date');
            $table->string('time');
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playing_schedules');
    }
};
