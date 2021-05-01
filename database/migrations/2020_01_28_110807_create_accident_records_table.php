<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccidentRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accident_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dateOfIncident');
            $table->integer('driver_id')->index();
            $table->integer('nameOfOfficer')->nullable();
            $table->string('description');
            $table->string('actionTaken');
            $table->string('policeReport')->nullable();
            $table->string('remedy')->nullable();
            $table->integer('vehicle_id')->index();
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
        Schema::dropIfExists('accident_records');
    }
}
