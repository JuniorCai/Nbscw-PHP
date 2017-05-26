<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('loginLogs'))
        {
            Schema::create('loginLogs', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('userId');
                $table->integer('typeId');
                $table->string('admin');
                $table->string('accountNo');
                $table->string('loginIp');
                $table->dateTime('loginDate');
                $table->string('loginAgent');
                $table->softDeletes();
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
        Schema::dropIfExists('loginLogs');
    }
}
