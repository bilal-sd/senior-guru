<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('type');
            $table->string('category');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('country');
            $table->string('zip');
            $table->string('lati');
            $table->string('longi');
            $table->string('package');
            $table->string('status');
            $table->string('keywords');
            $table->string('email');
            $table->string('phone');
            $table->string('website');
            $table->string('description');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
