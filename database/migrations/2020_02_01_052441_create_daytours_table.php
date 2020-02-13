<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaytoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daytours', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();

            $table->string('title');
            $table->Text('transfers');
            $table->string('isthisforme');
            $table->Text('canittailormade');
            $table->Text('whentogo');
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

        DB::update("ALTER TABLE daytours AUTO_INCREMENT = 10000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daytours');
    }
}
