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
        Schema::create('skilltocategories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skill_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();


            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skilltocategories');
    }
};