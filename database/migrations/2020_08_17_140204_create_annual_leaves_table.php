<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnualLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annual_leaves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('jobTitle');
            $table->string('department_id');
            $table->string('applyForDays');
            $table->year('year');
            $table->string('effectiveDate');
            $table->string('userSignature_id')->nullable()->index();
            $table->string('recommendBy_id')->nullable()->index();
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
        Schema::dropIfExists('annual_leaves');
    }
}
