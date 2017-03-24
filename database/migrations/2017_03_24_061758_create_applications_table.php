<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->date('apply_Date');
            $table->integer('staff_id')->unsigned();
            $table->string('application_Type', 100);
            $table->string('approved_By_Officer', 200);
            $table->string('approved_By_Housing_Officer', 200);
            $table->string('confirmation', 50);
            $table->timestamps();

            $table->foreign('staff_id')->references('id')->on('staff_details')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
