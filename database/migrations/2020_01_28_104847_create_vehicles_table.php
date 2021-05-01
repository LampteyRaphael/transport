<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('make');
            $table->string('regNo');
            $table->string('chasisNo');
            $table->year('yearMade')->nullable();
            $table->date('purchaseDate')->nullable();
            $table->string('colour')->nullable();
            $table->string('countryOfOrigin')->nullable();
            $table->string('cubicCentimeter')->nullable();
            $table->string('fuel')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
