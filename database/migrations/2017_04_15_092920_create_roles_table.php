<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('roles', function (Blueprint $table) {
           // $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('role_Id')->unique();
            $table->string('role_Name');
            $table->integer('authority_Id')->unsigned();
            $table->timestamps();

            $table->foreign('authority_Id')->references('id')->on('authorities');

        });

        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop the tables
        Schema::dropIfExists('roles');
    }
}
