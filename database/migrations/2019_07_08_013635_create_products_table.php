<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('brandId')->nullable();
            $table->string('descriptionLarge', 1000)->nullable();
            $table->string('descriptionShort', 50)->nullable();
            $table->integer('measureId')->nullable();
            $table->string('value')->nullable();
            $table->string('code');
            $table->bigInteger('price');
            $table->string('maxStock')->nullable();
            $table->string('minStock')->default(0)->nullable();
            $table->timestamps();
            //productos

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
