<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('unique_name')->unique();
            $table->bigInteger('company_id')->unsigned()->default(0);
            $table->bigInteger('vendorpackage_id')->unsigned()->default(0);
            $table->bigInteger('billing_count')->default(1);
            $table->enum('billing_type', ['monthly', 'days'])->default('days');
            $table->double('price', 8, 2)->default(0);
            $table->double('setup_cost', 8, 2)->default(0);
            $table->bigInteger('free_trial')->default(0);
            $table->dateTime('next_billing_date')->nullable();
            $table->double('next_billing_amount', 8, 2)->nullable();
            $table->bigInteger('current_billing_cycle')->default(1);
            $table->dateTime('starts_at')->nullable();
            $table->dateTime('expires_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_subscriptions');
    }
}
