<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotographerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('quot');
            $table->string('email');
            $table->string('line');
            $table->string('phone');
            $table->string('location');
            $table->string('photo');
            $table->boolean('status');
            $table->integer('schedule_1');
            $table->integer('schedule_2');
            $table->integer('schedule_3');
            $table->text('gallery');
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
        Schema::dropIfExists('photographer');
    }
}
