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
            $table->foreign('supertrack_id')->references('id')->on('supertracks')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('subtrack_id')->references('id')->on('subtracks')->onDelete('cascade')->onUpdate('cascade');
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
