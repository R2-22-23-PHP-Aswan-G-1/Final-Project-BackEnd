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
        Schema::create('work_histories', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->unsignedBigInteger('instructor_id');
            $table->timestamps();
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('work_history');
    }
};
