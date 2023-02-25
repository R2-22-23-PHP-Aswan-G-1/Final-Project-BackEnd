<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('supertrack_subtracks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('supertrack_id');
            $table->unsignedBigInteger('subtrack_id');
            $table->foreign('track_id')->references('id')->on('tracks');
            $table->foreign('subtrack_id')->references('id')->on('sub_track');
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
