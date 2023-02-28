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
        Schema::create('instructor_skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('instructor_id');
            $table->unsignedBigInteger('skill_id');
            $table->timestamps();
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructor_skills');
    }
};
