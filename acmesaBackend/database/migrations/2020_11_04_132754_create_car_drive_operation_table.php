<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarDriveOperationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_drive_operation', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('type_operation_id');
            $table->unsignedInteger('car_drive_id');        
            $table->timestamps();

            $table->foreign('type_operation_id')->references('id')->on('type_operations');
            $table->foreign('car_drive_id')->references('id')->on('car_drives');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_drive_operation');
    }
}
