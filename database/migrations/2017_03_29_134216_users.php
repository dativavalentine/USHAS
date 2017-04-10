<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 50);
            $table->integer('staff_Id')->unsigned();
            $table->string('password');
            $table->timestamps();

            $table->foreign('staff_Id')->references('id')->on('staff_details')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
