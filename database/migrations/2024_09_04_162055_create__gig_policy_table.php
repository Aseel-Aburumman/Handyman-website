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
        Schema::create('gig_policys', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->boolean('visible')->default(true);
            $table->timestamps();
            $table->softDeletes(); // Adds a 'deleted_at' column

        });
    }

    public function down()
    {
        Schema::dropIfExists('gig_policys');
    }
};
