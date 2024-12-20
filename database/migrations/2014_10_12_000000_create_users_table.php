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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->float('rating')->default(0);
            $table->string('image')->nullable();
            $table->boolean('reported')->default(false);
            $table->unsignedBigInteger('role_id')->default(1);
            $table->date('date_created');
            $table->rememberToken(); //used by the framework to help against Remember Me cookie hijacking. The value is refreshed upon login and logout.
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes(); // Adds a 'deleted_at' column

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
