<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerSubscriptionTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_subscription_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->bigInteger('company_id')->unsigned();
            $table->bigInteger('customersubscription_id')->unsigned()->default(0);
            $table->enum('type', ['online', 'bank', 'cash']);
            $table->double('amount')->default(0);
            $table->string('comments');
            $table->tinyInteger('is_success');
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
        Schema::dropIfExists('customer_subscription_transactions');
    }
}
