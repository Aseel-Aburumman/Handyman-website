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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('store_owner_id');
            $table->foreign('store_owner_id')->references('id')->on('store_owners')->onDelete('cascade');
            $table->string('name'); // English store name
            $table->string('name_ar'); // Arabic store name
            $table->string('location');
            $table->text('description')->nullable(); // English description
            $table->text('description_ar')->nullable(); // Arabic description
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->float('rating');
            $table->timestamps();
            $table->softDeletes(); // Adds a 'deleted_at' column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
