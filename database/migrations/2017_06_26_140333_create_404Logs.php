<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create404Logs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('404Logs')) {

            Schema::create('404Logs', function (Blueprint $table) {
                $table->increments('id');
                $table->string('url');
                $table->string('refer');
                $table->string('robot');
                $table->string('accountName');
                $table->string('ip');
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
        Schema::dropIfExists('=404Logs');
    }
}
