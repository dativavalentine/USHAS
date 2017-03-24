<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClearencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clearences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staff_Id')->unsigned();
            $table->string('description', 2000);
            $table->string('quantity', 50);
            $table->string('remarks', 100);

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
        Schema::dropIfExists('clearences');
    }
}
