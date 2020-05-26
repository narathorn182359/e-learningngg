<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetLearnningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_learnning', function (Blueprint $table) {
            $table->bigIncrements('id_set');
            $table->string('id_vichar');
            $table->string('id_position');
            $table->string('checked');
            $table->boolean('status')->nullable()->default(false);
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
        Schema::dropIfExists('set_learnning');
    }
}
