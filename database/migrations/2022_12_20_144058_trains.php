<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('departure');
            $table->string('arrivals');
            $table->date_add('time_of_departure');
            $table->date_add('time_of_arrival');
            $table->string('train_code');
            $table->number_format('number_of_wagons');
            $table->boolval('in_time');
            $table->boolval('deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trains');
        //
    }
};
