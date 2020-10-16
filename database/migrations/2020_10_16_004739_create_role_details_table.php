<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleDetailsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_menu');
            $table->integer('id_role');
            $table->boolean('read');
            $table->boolean('create');
            $table->boolean('edit');
            $table->boolean('delete');
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
        Schema::drop('role_details');
    }
}
