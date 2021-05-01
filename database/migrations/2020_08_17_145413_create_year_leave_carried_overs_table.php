<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYearLeaveCarriedOversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('year_leave_carried_overs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userId');
            $table->string('carriedForward');
            $table->date('dateApplyFor');
            $table->string('approveBy');
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
        Schema::dropIfExists('year_leave_carried_overs');
    }
}
