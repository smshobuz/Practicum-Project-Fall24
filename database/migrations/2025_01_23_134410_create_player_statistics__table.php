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
        Schema::create('player_statistics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_id');
            $table->integer('matches_played')->default(0);
            $table->integer('goals_scored')->default(0);
            $table->integer('assists')->default(0);
            $table->timestamps();
        
            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_statistics_');
    }
};
