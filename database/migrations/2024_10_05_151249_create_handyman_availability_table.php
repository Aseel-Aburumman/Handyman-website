<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHandymanAvailabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('handyman_availability', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('handyman_id');
            $table->timestamp('start_time')->nullable(); // Allow null values for start_time
            $table->timestamp('end_time')->nullable();   // Allow null values for end_time
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('handyman_id')->references('id')->on('handymans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('handyman_availability');
    }
}
