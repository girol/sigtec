<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reporter_id')->unsigned()->comment("Person who opens the ticket");
            $table->string('summary');
            $table->text('description');

            $table->timestamps();
            $table->timestamp('closed_at')->nullable()->comment('When the ticket is closed');

            $table->integer('designated_id')
                ->unsigned()
                ->nullable()
                ->comment("Person who is working on the issue");

            $table->integer('department_manager_id')
                ->unsigned()
                ->nullable()
                ->comment("Manager at the time of the ticket opening");

            $table->integer('location_manager_id')
                ->unsigned()
                ->nullable()
                ->comment("Location Manager at the time of the ticket opening");
            
            $table->integer('ticket_status_id')->unsigned()->nullable();
            $table->integer('location_id')->unsigned()->nullable();
            $table->integer('department_id')->unsigned()->nullable();
            $table->integer('purpose_id')->unsigned()->nullable();

            # Constraints

            $table->foreign('reporter_id')->references('id')->on('users');
            $table->foreign('designated_id')->references('id')->on('users');
            $table->foreign('department_manager_id')->references('id')->on('users');
            $table->foreign('location_manager_id')->references('manager_id')->on('locations');
            $table->foreign('ticket_status_id')->references('id')->on('ticket_statuses');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('purpose_id')->references('id')->on('purposes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
