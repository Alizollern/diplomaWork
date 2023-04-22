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
        Schema::create('availble_time', function (Blueprint $table) {
            $table->id();
            $table->time('start_interval_time');
            $table->time('end_interval_time');
            $table->timestamps();
            $table->unsignedBigInteger('day_id');

            $table->foreign('day_id')
                ->references('id')
                ->on('days')
                ->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('availble_time');
    }
};
