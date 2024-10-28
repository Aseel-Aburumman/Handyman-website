<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreOwnerApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('store_owner_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('store_name');
            $table->string('store_name_ar');
            $table->string('contact_number');
            $table->string('address');
            $table->string('address_ar');
            $table->string('location');
            $table->text('description');
            $table->text('description_ar');
            $table->json('flagged_parts')->nullable(); // Store flagged parts as JSON
            $table->unsignedBigInteger('certificate_id');
            $table->string('status')->default('pending'); // pending, approved, rejected
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('certificate_id')->references('id')->on('certificates')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('store_owner_applications');
    }
}
