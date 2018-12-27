<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SocialLinksUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('facebook',500)->nullable();
            $table->string('twitter',500)->nullable();
            $table->string('linkedin',500)->nullable();
            $table->string('pinterest',500)->nullable();
            $table->string('skype',500)->nullable();
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
