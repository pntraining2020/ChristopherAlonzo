<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employeeId');
            $table->time('timeIn');
            $table->time('timeOut');
            $table->time('totalTimeWorked');
            $table->time('totalBreakUsed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workdetails');
    }
}
