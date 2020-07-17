<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTempsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_temps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_company');
            $table->integer('id_user');
            $table->string('payment_code');
            $table->date('tanggal');
            $table->integer('subtotal');
            $table->integer('grand_total');
            $table->integer('discount');
            $table->integer('cash');
            $table->integer('change');
            $table->string('note');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order_temps');
    }
}
