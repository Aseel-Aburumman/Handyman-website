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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // The reporter (user)
            $table->unsignedBigInteger('handyman_id')->nullable(); // The handyman being reviewed
            $table->unsignedBigInteger('store_id')->nullable(); // The store being reviewed
            $table->unsignedBigInteger('product_id')->nullable(); // The product being reviewed
            $table->unsignedBigInteger('gig_id')->nullable(); // The client being reviewed by handyman


            $table->text('message');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('handyman_id')->references('id')->on('handymans')->onDelete('cascade');
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('gig_id')->references('id')->on('gigs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
