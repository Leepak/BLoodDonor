<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patientname');
            $table->string('gender');
            $table->integer('blood_id')->unsigned();
            $table->integer('district_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->string('diseases');
            $table->string('amount');
            $table->string('date');
            $table->string('hospital');
            $table->string('phone');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('requests');
    }
}
