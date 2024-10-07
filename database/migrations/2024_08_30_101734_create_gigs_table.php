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
        Schema::create('gigs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('handyman_id')->nullable();
            $table->unsignedBigInteger('category_id');
            // $table->unsignedBigInteger('skill_id');
            $table->unsignedBigInteger('service_id');


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('handyman_id')->references('id')->on('handymans')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            // $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');


            $table->string('title');
            $table->text('description');
            $table->string('location');
            $table->string('end_address')->nullable(); //for the moving
            $table->boolean('car_req')->nullable(); //for the moving

            $table->integer('estimated_time')->nullable();
            $table->date('task_date');
            $table->time('task_time');

            $table->integer('price');
            $table->integer('total');

            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes(); // Adds a 'deleted_at' column

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gigs');
    }
};
