<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 500);
            $table->string('unique_id', 500)->unique();
            $table->string('description', 2000);
            $table->bigInteger('billing_count')->default(1);
            $table->enum('billing_type', ['monthly', 'days'])->default('days');
            $table->double('price', 8, 2)->default(0);
            $table->double('setup_cost', 8, 2)->default(0);
            $table->bigInteger('free_trial')->default(0);
            $table->tinyInteger('is_active')->default(1);
            $table->tinyInteger('is_popular')->default(0);
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
        Schema::dropIfExists('vendor_packages');
    }
}
