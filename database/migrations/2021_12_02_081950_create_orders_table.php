<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_number');
            $table->string('invoice_prefix');
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('customergroup_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('payment_first_name');
            $table->string('payment_last_name');
            $table->string('payment_company');
            $table->string('payment_address_1');
            $table->string('payment_address_2');
            $table->string('payment_city');
            $table->string('payment_postal_code');
            $table->string('payment_country');
            $table->bigInteger('paymentcountry_id')->unsigned();
            $table->string('payment_zone');
            $table->bigInteger('paymentzone_id')->unsigned();
            $table->string('payment_address_format');
            $table->string('payment_method');
            $table->string('payment_code');
            $table->string('shipping_first_name');
            $table->string('shipping_last_name');
            $table->string('shipping_company');
            $table->string('shipping_address_1');
            $table->string('shipping_address_2');
            $table->string('shipping_city');
            $table->string('shipping_postal_code');
            $table->string('shipping_country');
            $table->bigInteger('shippingcountry_id')->unsigned();
            $table->string('shipping_zone');
            $table->bigInteger('shippingzone_id')->unsigned();
            $table->string('shipping_address_format');
            $table->string('shipping_method');
            $table->string('shipping_code');
            $table->double('shipping_longitude');
            $table->double('shipping_latitude');
            $table->string('comment');
            $table->double('total');
            $table->timestamp('delivery_time');
            $table->integer('delivery_eta');
            $table->boolean('is_payment_verified');
            $table->bigInteger('orderstatus_id')->unsigned();
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
        Schema::dropIfExists('orders');
    }
}
