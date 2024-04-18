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
        Schema::create('db_product_kanalowas', function (Blueprint $table) {
            $table->id();
            $table->string('producent')->nullable();
            $table->string('model')->nullable();
            $table->string('chlodzenie')->nullable();
            $table->string('grzanie')->nullable();
            $table->string('m2')->nullable();
            $table->string('cena')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('db_product_kanalowas');
    }
};
