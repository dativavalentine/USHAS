<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthoritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create a schema
        //
        Schema::create('authorities', function (Blueprint $table) {
            //$table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('authority_Id');
            $table->string('authority_Name');
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
        //Drop the table
        Schema::dropIfExists('authorities');
    }
}
