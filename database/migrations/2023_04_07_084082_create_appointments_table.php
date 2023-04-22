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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->text('appointment_reason');
            $table->unsignedBigInteger('availble_id');
            $table->bigInteger('appointment_number');
            $table->unsignedBigInteger('days_id');
            $table->unsignedBigInteger('appointment_doctor_id');
            $table->foreign('appointment_doctor_id')->references('id')->on('doctors')->onDelete('cascade');

            $table->unsignedBigInteger('appointment_user_id');
            $table->foreign('appointment_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('availble_id')->references('id')->on('availble_time')->onDelete('cascade');
            $table->foreign('days_id')->references('id')->on('days')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
