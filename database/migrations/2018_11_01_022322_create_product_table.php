<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table->string('product_code');
            $table->string('product_image');
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('categories_id');
            $table->string('quantity');
            $table->string('rate');
            $table->integer('active');
            $table->integer('status');
            $table->timestamps();
            $table->foreign('brand_id')->references('brand_id')->on('brands');
            $table->foreign('categories_id')->references('categories_id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
