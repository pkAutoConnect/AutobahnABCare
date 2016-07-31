<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolicysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('premium');
//            $table->string('cartype');
//            $table->string('vin')->unique();
//            $table->string('engine')->unique();
//            $table->integer('salesexecid')->unsigned();
//            $table->integer('mobile');
//            $table->string('email');
     //       $table->timestamp('policystartdate');
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
        Schema::drop('policys');
    }
}
