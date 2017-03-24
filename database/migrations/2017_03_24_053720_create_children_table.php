<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staff_Id')->unsigned();
            $table->string('first_Name', 50);
            $table->string('middle_Name', 50);
            $table->string('last_Name', 50);
            $table->date('date_Of_Birth');
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
        Schema::dropIfExists('children');
    }
}
