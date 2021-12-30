<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product_variations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('orderproduct_id')->unsigned();
            $table->bigInteger('prdoduct_id')->unsigned();
            $table->bigInteger('productvariation_id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->integer('minimum_quantity');
            $table->integer('maximum_quantity');
            $table->boolean('is_active');
            $table->boolean('is_mandatory');
            $table->boolean('is_multi_select');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product_variations');
    }
}
