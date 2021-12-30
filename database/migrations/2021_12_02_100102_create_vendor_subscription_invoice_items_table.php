<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorSubscriptionInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_subscription_invoice_items', function (Blueprint $table) {
            $table->id();
            $table->string('item');
            $table->integer('quantity')->default(1);
            $table->double('amount', 8, 2)->default(0);
            $table->bigInteger('invoice_id')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor_subscription_invoice_items');
    }
}
