<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimingsToRestaurantSetups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restaurant_setups', function (Blueprint $table) {
            $table->time('opening_time');
            $table->time('closing_time');
            $table->string('off_days')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurant_setups', function (Blueprint $table) {
            $table->time('opening_time');
            $table->time('closing_time');
            $table->string('off_days')->nullable();
           
        });
    }
}