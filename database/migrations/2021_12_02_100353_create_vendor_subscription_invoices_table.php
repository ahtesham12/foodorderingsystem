<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorSubscriptionInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_subscription_invoices', function (Blueprint $table) {
            $table->id();
            $table->string('unique_name')->unique();
            $table->bigInteger('company_id')->unsigned()->default(0);
            $table->bigInteger('customertransaction_id')->unsigned()->default(0);
            $table->dateTime('paid_on');
            $table->dateTime('invoice_on');
            $table->string('billing_period');
            $table->double('total', 8, 2);
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
        Schema::dropIfExists('vendor_subscription_invoices');
    }
}
