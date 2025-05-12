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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->date('date_of_birth');
            $table->unsignedBigInteger('team_id')->nullable(); // Foreign key field
            $table->date('subscription_start')->nullable();
            $table->date('subscription_end')->nullable();
            $table->boolean('subscription_fee_paid')->default(false);
            $table->timestamps();
        
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('set null');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
