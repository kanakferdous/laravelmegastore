<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->string('title')->unique();
            $table->longText('description')->nullable;
            $table->integer('regular_price');
            $table->integer('sale_price');
            $table->string('sku')->nullable;
            $table->integer('quantity');
            $table->integer('status')->default(0);
            $table->integer('featured')->default(0);
            $table->mediumText('feat_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
