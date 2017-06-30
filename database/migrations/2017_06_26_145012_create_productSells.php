<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductBuys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('productSells')) {

            Schema::create('productSells', function (Blueprint $table) {
                $table->increments('id');
                $table->integer("userId");
                $table->integer("companyId");
                $table->integer("custCategoryId");
                $table->integer("CategoryId");
                $table->integer("linkId");
                $table->string("title");
                $table->string("stock");
                $table->string("detail");
                $table->string("img1");
                $table->string("img2");
                $table->string("img3");
                $table->dateTime('expiration');
                $table->string('param1');
                $table->string('val1');
                $table->string('param2');
                $table->string('val2');
                $table->string('unit');
                $table->decimal("price");
                $table->decimal("maxPrice");
                $table->decimal("minPrice");
                $table->integer("priceType");
                $table->integer("isRecommend");
                $table->integer("verifyStatus");
                $table->integer("releaseStatus");
                $table->integer("operatorId");
                $table->dateTime("startDate");
                $table->dateTime("endDate");
                $table->dateTime("updateDate");
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
        Schema::dropIfExists('productBuys');
    }
}
