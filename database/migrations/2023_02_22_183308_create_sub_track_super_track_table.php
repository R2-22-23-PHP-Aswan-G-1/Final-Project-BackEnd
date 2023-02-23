<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sub_track_super_tracks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('super_track_id');
            $table->unsignedBigInteger('sub_track_id');
            $table->foreign('super_track_id')->references('id')->on('tracks')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sub_track_id')->references('id')->on('sub_tracks')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_track_super_track');
    }
};
