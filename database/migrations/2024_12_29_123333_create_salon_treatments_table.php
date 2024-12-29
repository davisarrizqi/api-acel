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
        Schema::create('salon_treatments', function (Blueprint $table) {
            $table->id();
            $table->integer('salon_id');
            $table->foreign('salon_id')->references('id')->on('salons')->cascadeOnDelete();
            $table->string('name');
            $table->string('image');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salon_treatments');
    }
};
