<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveDaysRemainingInTheYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_days_remaining_in_the_years', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userId')->index()->nullable();
            $table->string('remainDays');
            $table->string('currentDate');
            $table->string('approval');
            $table->string('effectiveDate');
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
        Schema::dropIfExists('leave_days_remaining_in_the_years');
    }
}
