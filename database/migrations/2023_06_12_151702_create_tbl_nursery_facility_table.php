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
        Schema::create('tbl_nursery_facility', function (Blueprint $table) {
            $table->unsignedInteger('nursery_id');
            $table->unsignedInteger('facility_id');
            $table->foreign('nursery_id')->references('id')->on('tbl_nursery')->onDelete('cascade');        
            $table->foreign('facility_id')->references('id')->on('tbl_facility')->onDelete('cascade');        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_nursery_facility');
    }
};
