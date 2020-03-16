<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->text('country_id');
            $table->text('state_id');
            $table->text('branchname');
            $table->text('nationalcode')->nullable();
            $table->text('email')->nullable();
            $table->text('tell');
            $table->text('mobile');
            $table->text('name');
            $table->text('province')->nullable();
            $table->text('city')->nullable();
            $table->text('address');
            $table->text('code');
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
        Schema::dropIfExists('branches');
    }
}
