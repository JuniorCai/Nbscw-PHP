<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('users'))
        {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('accountName')->unique();
                $table->string('nickName');
                $table->string('password');
                $table->string('payPassword');
                $table->string('email')->default('');
                $table->string('avatar')->default('');
                $table->integer('gender');
                $table->integer('userGroup');
                $table->string('userName');
                $table->string('mobile');
                $table->string('qq')->default('');
                $table->integer('areaId');
                $table->string('ip');
                $table->integer('isAuth');
                $table->integer('isAdmin');
                $table->integer('authMobile');
                $table->string('remark')->default('');
                $table->integer('authEmail');
                $table->softDeletes();
                $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
