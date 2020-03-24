<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('trip_id');
            $table->mediumText('fullname');
            $table->mediumText('nationality');
            $table->string('phone');
            $table->string('email');
            $table->string('arrival_date');
            $table->string('departure_date');
            $table->string('no_adults');
            $table->string('no_children');
            $table->mediumText('notes');
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
        Schema::dropIfExists('bookings');
    }
}
