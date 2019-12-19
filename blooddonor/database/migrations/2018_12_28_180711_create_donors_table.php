<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('image')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->string('dob');
            $table->integer('blood_id')->unsigned();
            $table->integer('district_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->string('phone');
            $table->string('email');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('donors');
    }
}
