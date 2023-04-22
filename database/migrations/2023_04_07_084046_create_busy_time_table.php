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
        Schema::create('busy_time', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('availble_id');
            $table->boolean('status')->default(false);
            $table->timestamps();

            $table->foreign('availble_id')
            ->references('id')
            ->on('availble_time')
            ->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('busy_time');
    }
};
