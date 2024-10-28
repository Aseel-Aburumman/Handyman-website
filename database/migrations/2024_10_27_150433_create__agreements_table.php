<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgreementsTable extends Migration
{
    public function up()
    {
        Schema::create('agreements', function (Blueprint $table) {
            $table->id();
            $table->string('agreement_type'); // 'handyman' or 'store_owner'
            $table->text('content'); // The actual agreement content
            $table->text('content_ar'); // The actual agreement content

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('agreements');
    }
}
