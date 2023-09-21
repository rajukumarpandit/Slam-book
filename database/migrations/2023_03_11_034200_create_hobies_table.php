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
        Schema::create('hobies', function (Blueprint $table) {
            $table->id('useer_id');
            $table->unsignedBigInteger('answer_id');
            $table->string('Hobies_Name',20)->change();
            $table->foreign('answer_id')->references('answer_id')->on('answers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hobies');
    }
};
