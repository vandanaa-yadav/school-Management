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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('enroll_no');
            $table->unsignedBigInteger('batch_id');
            $table->unsignedBigInteger('stu_id');
            $table->date('join_date');
            $table->double('fee')->nullable();
            $table->foreign('batch_id')->references('id')->on('batches')->OnDelete('cascade');
            $table->foreign('stu_id')->references('id')->on('students')->OnDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
