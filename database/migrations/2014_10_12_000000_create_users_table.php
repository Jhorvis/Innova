<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
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
            $table->integer('countryId');
            $table->integer('provinceId');
            $table->integer('cityId');
            $table->integer('municipalityId');
            $table->integer('streetId');
            $table->integer('number');
            $table->string('firstCellphone');
            $table->string('secondCellphone');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('status');
            $table->integer('personRoleId');
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
