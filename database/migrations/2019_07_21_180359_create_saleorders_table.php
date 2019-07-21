<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saleorders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idOrder')->unique();
            $table->bigInteger('totalneto');
            $table->bigInteger('totalprice');
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
        Schema::dropIfExists('saleorders');
    }
}
