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
        Schema::create('tbl_prefecture_region', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('en_name');
            $table->unsignedInteger('main_id');
            $table->timestamps();
            $table->foreign('main_id')->references('id')->on('tbl_main_region')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_prefecture_region');
    }
};
