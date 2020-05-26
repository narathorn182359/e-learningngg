<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestAnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_ans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vichar');
            $table->string('codd_staff');
            $table->string('score');
            $table->string('full_score');
            $table->string('question');
            $table->boolean('confirmed')->nullable()->default(false);
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
        Schema::dropIfExists('test_ans');
    }
}
