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
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->text('receipt_title');
            $table->text('receipt_comments');
            $table->date('receipt_date');
            $table->string('status')->comment('1-new, 2-accepted, 3-rejjected');

            $table->unsignedBigInteger('receipt_doctor_id');
            $table->foreign('receipt_doctor_id')->references('id')->on('doctors')->onDelete('cascade');

            $table->unsignedBigInteger('receipt_user_id');
            $table->foreign('receipt_user_id')->references('id')->on('users')->onDelete('cascade');

//            $table->unsignedBigInteger('receipt_status_id');
//            $table->foreign('receipt_status_id')->references('id')->on('statuses')->onDelete('cascade');

//            $table->unsignedBigInteger('receipt_medicine_rec_id');
//            $table->foreign('receipt_medicine_rec_id')->references('id')->on('medicine_receipts')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipts');
    }
};
