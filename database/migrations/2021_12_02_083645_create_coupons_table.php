<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->enum('type', ['coupon_type']);
            $table->double('discount');
            $table->dateTime('start_date');
            $table->dateTime('end_time');
            $table->boolean('is_for_new_users');
            $table->integer('max_count');
            $table->integer('max_count_per_user');
            $table->double('minimum_order_amount');
            $table->bigInteger('freeproduct_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
