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
        Schema::create('tbl_review', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('employment');
            $table->unsignedSmallInteger('experience');
            $table->unsignedSmallInteger('workperiod');
            $table->unsignedSmallInteger('workhour');
            $table->double('rating');
            $table->string('content', 1000)->min(100);
            $table->unsignedInteger('review_id');
            $table->timestamps();
            $table->foreign('review_id')->references('id')->on('tbl_review')->onDelete('cascade');        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_review');
    }
};
