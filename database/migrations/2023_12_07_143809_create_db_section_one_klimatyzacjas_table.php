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
        Schema::create('db_section_one_klimatyzacjas', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('text_1')->nullable();
            $table->string('text_2')->nullable();
            $table->string('model_1')->nullable();
            $table->string('model_2')->nullable();
            $table->string('model_3')->nullable();
            $table->string('model_4')->nullable();
            $table->string('model_5')->nullable();
            $table->string('model_6')->nullable();
            $table->string('model_7')->nullable();
            $table->string('model_8')->nullable();
            $table->string('model_9')->nullable();
            $table->string('model_10')->nullable();
            $table->string('model_11')->nullable();
            $table->string('model_12')->nullable();
            $table->string('model_13')->nullable();
            $table->string('model_14')->nullable();
            $table->string('model_15')->nullable();
            $table->string('model_16')->nullable();
            $table->string('model_17')->nullable();
            $table->string('model_18')->nullable();
            $table->string('model_19')->nullable();
            $table->string('model_20')->nullable();
            $table->string('model_21')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('db_section_one_klimatyzacjas');
    }
};
