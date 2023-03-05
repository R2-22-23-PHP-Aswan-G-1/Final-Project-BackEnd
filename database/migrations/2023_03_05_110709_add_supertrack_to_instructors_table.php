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
        Schema::table('instructors', function (Blueprint $table) {
            $table->unsignedBigInteger('supertrack_id')->nullable();
            $table->foreign('supertrack_id')->references('id')->on('supertracks')->onDelete('cascade')->onUpdate('cascade');
        });
    }
    
    public function down(): void
    {
        Schema::table('instructors', function (Blueprint $table) {
            //
        });
    }
};
