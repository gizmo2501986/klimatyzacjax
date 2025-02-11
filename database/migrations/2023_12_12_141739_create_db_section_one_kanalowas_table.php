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
        Schema::create('db_section_one_kanalowas', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('text_1')->nullable();
            $table->string('text_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('db_section_one_kanalowas');
    }
};
