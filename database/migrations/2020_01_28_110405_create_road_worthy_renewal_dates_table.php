<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoadWorthyRenewalDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('road_worthy_renewal_dates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('renewalDate');
            $table->date('expiringDate');
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
        Schema::dropIfExists('road_worthy_renewal_dates');
    }
}
