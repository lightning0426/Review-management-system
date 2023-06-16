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
        if(!Schema::hasTable('tbl_qualification')){
            Schema::create('tbl_qualification', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->timestamps();
        });

        }
    }

    /**
     * Reverse the migrations.
     * 
     */
    // Schema::create('tbl_nursery', function (Blueprint $table) {
    //     $table->increments('id');
    //     $table->string('name');
    //     $table->string('address');
    //     $table->unsignedInteger('prefecture_id');
    //     $table->unsignedInteger('city_id');
    //     $table->timestamps();
    //     $table->foreign('prefecture_id')->references('id')->on('tbl_prefecture_region')->onDelete('cascade');
    //     $table->timestamps();
    public function down(): void
    {
        Schema::dropIfExists('tbl_qualification');
    }
};
