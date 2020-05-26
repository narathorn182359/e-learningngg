<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('emp_id')->nullable();
            $table->string('emp_idcard')->nullable();
            $table->string('name_title')->nullable();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('department')->nullable();
            $table->string('position')->nullable();
            $table->string('start_work')->nullable();
            $table->string('company')->nullable();
            $table->string('pic')->nullable();
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
        Schema::dropIfExists('employee');
    }
}
