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
        Schema::create('salon_bookings', function (Blueprint $table) {
            // main structure
            $table->id();
            
            // salons
            $table->integer('salon_id');
            $table->foreign('salon_id')->references('id')->on('salons')->cascadeOnDelete();

            // users
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->integer('user_id');
            
            // treatments
            $table->integer('treatment_id');
            $table->foreign('treatment_id')->references('id')->on('salon_treatments')->cascadeOnDelete();
            
            // timestamps
            $table->date('booking_date')->default(now());
            $table->time('booking_time')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salon_bookings');
    }
};
