<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHandymanApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('handyman_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('price_per_hour');
            $table->integer('experience');
            $table->text('bio')->nullable();
            $table->string('status')->default('pending'); // pending, approved, rejected
            $table->timestamps();
            $table->json('flagged_parts')->nullable(); // Store flagged parts as JSON
            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('handyman_applications');
    }
}
