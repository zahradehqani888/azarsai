<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->timestamps();
        });
       /** Schema::create('adminproduct_colors', function (Blueprint $table) {
            $table->integer('adminproduct_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->primary(['adminproduct_id' , 'color_id']);
            });
            Schema::create('product_colors', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->primary(['product_id' , 'color_id']);
            });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colors');
        Schema::dropIfExists('adminproduct_colors');
        Schema::dropIfExists('product_colors');
    }
}
