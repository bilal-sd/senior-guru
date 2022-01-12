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
            $table->smallInteger('type');
            $table->integer('category');
            $table->string('slug')->unique();
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('country');
            $table->string('zip');
            $table->string('lati')->nullable();
            $table->string('longi')->nullable();
            $table->boolean('status')->default(0);
            $table->string('keywords')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('website')->nullable();
            $table->string('package')->nullable();
            $table->text('description')->nullable();
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
