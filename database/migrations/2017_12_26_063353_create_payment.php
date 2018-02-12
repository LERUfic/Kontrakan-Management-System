<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblPayment', function(Blueprint $table){
            $table->string('user_username')->unique();
            $table->foreign('user_username')->references('user_username')->on('tblUser');
            $table->string('ktr_username');
            $table->foreign('ktr_username')->references('ktr_username')->on('tblKontrakan');
            $table->string('cat_id');
            $table->foreign('cat_id')->references('cat_id')->on('tblCategory');
            $table->integer('pay_nominal');
            $table->integer('pay_status');
            $table->date('ktr_start');
            $table->integer('ktr_jmlpenghuni');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
