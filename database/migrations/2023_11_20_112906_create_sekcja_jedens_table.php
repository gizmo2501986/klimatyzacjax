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
        Schema::create('sekcja_jedens', function (Blueprint $table) {
            $table->id();
            $table->string('text_1')->nullable();
            $table->string('text_2')->nullable();
            $table->string('text_3')->nullable();
            $table->string('text_4')->nullable();
            $table->string('text_5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekcja_jedens');
    }
};
