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
        Schema::create('tbl_city_region', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('en_name');
            $table->unsignedSmallInteger('flag');
            $table->unsignedInteger('prefecture_id');
            $table->timestamps();
            $table->foreign('prefecture_id')->references('id')->on('tbl_prefecture_region')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    
    public function down(): void
    {
        Schema::dropIfExists('tbl_city_region');
    }
};
