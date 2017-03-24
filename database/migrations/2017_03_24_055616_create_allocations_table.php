<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allocations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('house_id')->unsigned();
            $table->integer('staff_Id')->unsigned();
            $table->date('start_Date');
            $table->string('status', 50);
            $table->timestamps();

            $table->foreign('staff_Id')->references('id')->on('staff_details')->onDelete('cascade');
            $table->foreign('house_id')->references('id')->on('houses')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allocations');
    }
}
