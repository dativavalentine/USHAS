<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->integer('staff_Id')->unsigned();
            $table->string('password');
            $table->integer("role");//I added the attribute role
            $table->timestamps();

            $table->foreign('staff_Id')->references('id')->on('staff_details')->onDelete('cascade');
//            $table->foreign()
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logins');
    }
}
