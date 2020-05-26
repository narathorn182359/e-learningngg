<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name_')->nullable();
            $table->text('des_')->nullable();
            $table->text('img_')->nullable();
            $table->text('code_')->nullable();
            $table->text('paped')->nullable();
            $table->text('youtube')->nullable();
            $table->text('gdrive')->nullable();
            $table->text('mm')->nullable();
            $table->text('mustlearn')->nullable();
            $table->text('learning')->nullable();
            $table->text('finished')->nullable();
            $table->boolean('status')->default('1');
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
        Schema::dropIfExists('product');
    }
}
