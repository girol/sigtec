<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('room_number', 6);
            $table->string('name');
            $table->string('phone_number', 6);
            $table->string('building_block', 6);
            $table->string('floor', 15);
            $table->integer('manager_id')->unsigned();
            $table->foreign('manager_id')->references('id')->on('users');
            $table->boolean('in_phone_list');
            $table->boolean('active');
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
        Schema::dropIfExists('locations');
    }
}
