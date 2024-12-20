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
        Schema::create('handymans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('experience')->default(0);
            $table->integer('price_per_hour')->default(0);

            $table->string('store_location')->nullable();
            $table->text('bio')->nullable();
            // $table->text('car')->nullable();

            $table->timestamps();
            $table->softDeletes(); // Adds a 'deleted_at' column
            $table->boolean('suspended')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('handymans');
    }
};
