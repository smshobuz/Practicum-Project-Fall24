<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('event_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('player_id');
            $table->timestamps();
    
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('player_id')->references('id')->on('users')->onDelete('cascade');
            $table->unique(['event_id', 'player_id']);
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_applications');
    }
};
