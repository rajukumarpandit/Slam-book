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
        Schema::create('friendlists', function (Blueprint $table) {
            $table->id('Friend_id');
            $table->unsignedBigInteger('Slambook_id');
            $table->string('Friend_Name',50);
            $table->string('Email',80);
            $table->string('Phone_no',11);
            $table->foreign('Slambook_id')->references('Slambook_id')->on('slambooks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('friendlists');
    }
};
