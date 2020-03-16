<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_products', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('storage');
            $table->integer('color_id')->nullable();
            $table->text('number')->nullable();
            $table->text("customerprice");
            $table->text("branchprice");
            $table->text('os')->nullable();
            $table->text("battery")->nullable();
            $table->text("display")->nullable();
            $table->text("weight")->nullable();
            $table->text("ram")->nullable();
            $table->text("camera")->nullable();
            $table->text("processor")->nullable();
            $table->text("sim")->nullable();
            $table->text('image1');
            $table->text('image2')->nullable();
            $table->text('image3')->nullable();
            $table->text('image4')->nullable();
            $table->text('description')->nullable();
            
            
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
        Schema::dropIfExists('admin_products');
    }
}
