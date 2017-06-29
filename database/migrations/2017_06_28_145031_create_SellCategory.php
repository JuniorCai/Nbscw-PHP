<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('SellCategory')) {

            Schema::create('SellCategory', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->integer('parentId');
                $table->integer('sort');
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
        Schema::dropIfExists('SellCategory');
    }
}
