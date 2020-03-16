<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGarantiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garanties', function (Blueprint $table) {
            $table->increments('id');
            $table->text('serial_no');
            $table->text('imei');
            $table->text('brand');
            $table->text('model');
            $table->text('time_in');
            $table->text('garanty_type');
            $table->text('garanty_date');
            $table->text('activation_code');
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
        Schema::dropIfExists('garanties');
    }
}
