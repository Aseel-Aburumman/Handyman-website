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
        Schema::create('store_owners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('store_name')->nullable(); // English store name
            $table->string('store_name_ar')->nullable(); // Arabic store name
            $table->string('contact_number')->nullable();
            $table->string('address')->nullable(); // English address
            $table->string('address_ar')->nullable(); // Arabic address
            $table->tinyInteger('rating')->default(0);
            $table->unsignedBigInteger('certificate_id')->nullable();
            $table->foreign('certificate_id')->references('id')->on('certificates')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes(); // Adds a 'deleted_at' column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_owners');
    }
};
