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
        Schema::create('tbl_nursery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('cooperate_id');
            $table->timestamps();
            $table->foreign('city_id')->references('id')->on('tbl_city_region')->onDelete('cascade');        
            $table->foreign('cooperate_id')->references('id')->on('tbl_cooperate')->onDelete('cascade');        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_nursery');
    }
};
