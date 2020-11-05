<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('license_plate',7);
            $table->string('color',30);
            $table->string('mark',45);
            $table->unsignedInteger('type_car_id');
            $table->unsignedInteger('owner_id');            
            $table->softDeletes(); 
            $table->timestamps();


            $table->foreign('type_car_id')->references('id')->on('data_auxiliary');
            $table->foreign('owner_id')->references('id')->on('persons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
