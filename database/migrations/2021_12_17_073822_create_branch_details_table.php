<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_details', function (Blueprint $table) {
            $table->id();
            $table->enum('branch_status',[0,1])->default(1);
            $table->string('branch_name');
            $table->string('branch_address');
            $table->enum('delivery',[0,1])->default(1);
            $table->enum('takeaway',[0,1])->default(1);
            $table->enum('dine_in',[0,1])->default(1);
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
        Schema::dropIfExists('branch_details');
    }
}