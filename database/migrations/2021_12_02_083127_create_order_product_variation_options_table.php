<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductVariationOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product_variation_options', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('orderproduct_id')->unsigned();
            $table->bigInteger('orderproductvariation_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('productvariation_id')->unsigned();
            $table->bigInteger('productvariationoption_id')->unsigned();
            $table->string('code');
            $table->string('name');
            $table->string('description');
            $table->double('price');
            $table->double('disocunt_price');
            $table->boolean('is_active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product_variation_options');
    }
}
