<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *foreign
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('secondSurname');
            $table->string('documentIdentity');
            $table->integer('countryId')->nullable();
            $table->integer('provinceId')->nullable();
            $table->integer('cityId')->nullable();
            $table->integer('municipalityId')->nullable();
            $table->integer('streetId')->nullable();
            $table->integer('number')->nullable();
            $table->string('firstCellphone');
            $table->string('secondCellphone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('status')->default(true);
            $table->UnsignedBigInteger('personRoleId');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
