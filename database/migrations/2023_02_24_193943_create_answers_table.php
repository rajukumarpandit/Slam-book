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
        Schema::create('answers', function (Blueprint $table) {
            $table->id('Answer_id');
            $table->string('Answer')->nullable();
            $table->unsignedBigInteger('Favorite_id');
            $table->unsignedBigInteger('Hobies_id');
            $table->unsignedBigInteger('Qualification_id');
            $table->unsignedBigInteger('Friend_id');
            $table->foreign('Favorite_id')->references('Favorite_id')->on('favorites');
            $table->foreign('Hobies_id')->references('Hobies_id')->on('hobies');
            $table->foreign('Qualification_id')->references('Qualification_id')->on('qualifications');
            $table->foreign('Friend_id')->references('Friend_id')->on('friends');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
