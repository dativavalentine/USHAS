<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staff_Id')->unique();
            $table->string('first_Name');
            $table->string('middle_Name')->nullable();
            $table->string('last_Name');
            $table->string('designation');
            $table->string('college');
            $table->string('admin_Post');
            $table->string('tel_No');
            $table->date('date_Of_Employment');
            $table->integer('application_Number');
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
        Schema::dropIfExists('staff_details');
    }
}
