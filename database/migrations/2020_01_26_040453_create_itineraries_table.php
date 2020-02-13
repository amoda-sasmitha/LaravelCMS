<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItinerariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itineraries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('length');
            $table->Text('price');
            $table->Text('whentogo');
            $table->Text('transfers');
            $table->mediumText('description');
            $table->Text('cover');
            
            $table->string('type');
            $table->Text('looking_for');
            $table->Text('places');
            
            $table->Text('activity_one_image');
            $table->Text('activity_two_image');
            $table->Text('activity_three_image');
            $table->Text('activity_one_title');
            $table->Text('activity_two_title');
            $table->Text('activity_three_title');

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
        Schema::dropIfExists('itineraries');
    }
}
