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
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('status_category'); // e.g., 'gig', 'store', 'skill', 'sales', 'ticket'
            $table->string('name'); // English name
            $table->string('name_ar'); // Arabic name
            $table->text('description')->nullable(); // English description
            $table->text('description_ar')->nullable(); // Arabic description
            $table->timestamps();
            $table->softDeletes(); // Adds a 'deleted_at' column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};
