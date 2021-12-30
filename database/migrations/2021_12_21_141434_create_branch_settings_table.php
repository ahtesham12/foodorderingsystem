<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('tax');
            $table->integer('delivery_time');
            $table->integer('takeaway_time');
            $table->integer('dine_in_time');
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
        Schema::dropIfExists('branch_settings');
    }
}