<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profile_fullname',100)->nullable();
            $table->string('profile_avatar',100)->nullable()->default('default.png');
            $table->string('profile_sex',5)->nullable();
            $table->date('profile_birthday')->nullable()->default('2018-01-01');
            $table->string('profile_address',100)->nullable();
            $table->string('profile_telephone',20)->nullable();
            $table->string('profile_description',500)->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
