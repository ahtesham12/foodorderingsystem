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
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->text('description');
            $table->double('display_price');
            $table->boolean('is_prepacked_item');
            $table->boolean('is_sold_out');
            $table->bigInteger('taxclass_id')->unsigned();
            $table->bigInteger('weightclass_id')->unsigned();
            $table->double('weight');
            $table->double('length');
            $table->double('height');
            $table->double('width');
            $table->bigInteger('lengthclass_id')->unsigned();
            $table->double('price');
            $table->integer('minimum_quantity');
            $table->integer('maximum_quantity');
            $table->boolean('is_active');
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
