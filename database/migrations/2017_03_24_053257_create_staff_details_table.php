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
            $table->string('staff_Id', 45)->unique();
            $table->string('first_Name', 60);
            $table->string('middle_Name', 60)->nullable();
            $table->string('last_Name', 60);
            $table->string('designation', 60);
            $table->string('college', 60);
            $table->string('admin_Post', 60);
            $table->string('tel_No', 60);
            $table->date('date_Of_Employment');
            $table->string('department_Id', 60);
            $table->integer('application_Number');
            $table->string('Username');
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
