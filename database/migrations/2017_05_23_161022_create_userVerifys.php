<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserVerifys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('userVerifys'))
        {
            Schema::create('userVerifys', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('userId');
                $table->integer('typeId');
                $table->string('verifyCode');
                $table->string('mobile');
                $table->string('email');
                $table->integer('status');
                $table->integer('isDelete');
                $table->dateTime('created_at');
                $table->dateTime('updated_at');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userVerifys');
    }
}
