<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('national_code');
            $table->text('tel');
            $table->text('model');
            $table->text('serial_no');
            $table->text('imei');
            $table->text('date_in');
            $table->text('garanty_date');
            $table->text('message');
            $table->text('status');
            $table->text('activation_code')->nullable();
            $table->text('branch_name');
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
        Schema::dropIfExists('repairs');
    }
}
