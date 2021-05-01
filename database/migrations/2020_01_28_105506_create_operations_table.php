<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('driver_id')->index();
            $table->string('departurePoint');
            $table->string('departureMileage');
            $table->string('destination');
            $table->string('date');
            $table->string('officerAssigned');
            $table->string('assignmentCompletionTime');
            $table->string('arrivalMileage');
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
        Schema::dropIfExists('operations');
    }
}
