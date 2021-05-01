<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrrentYearLeaveTakensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crrent_year_leave_takens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userId');
            $table->integer('numberOfRequestedDay');
            $table->string('dateRequested');
            $table->string('approval');
            $table->string('effective_id')->index()->nullable();
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
        Schema::dropIfExists('crrent_year_leave_takens');
    }
}
