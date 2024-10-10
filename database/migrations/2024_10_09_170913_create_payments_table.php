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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('handyman_id')->nullable();
            $table->unsignedBigInteger('gig_id')->nullable();
            $table->integer('amount')->nullable();

            $table->text('description');
            $table->unsignedBigInteger('status_id');


            $table->foreign('handyman_id')->references('id')->on('handymans')->onDelete('cascade');
            $table->foreign('gig_id')->references('id')->on('gigs')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade'); //21 +22

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
