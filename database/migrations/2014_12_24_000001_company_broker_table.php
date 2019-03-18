<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyBrokerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_brokers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('broker_name');
            $table->string('broker_avatar');
            $table->string('broker_telephone');
            $table->string('broker_fax');
            $table->string('broker_mail');
            $table->string('broker_facebook');
            $table->string('broker_twitter');
            $table->string('broker_linkedin');
            $table->string('broker_skype');
            $table->string('broker_slack');
            $table->string('broker_description',1000);
            $table->integer('broker_level');
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('company_informations')->onDelete('cascade');
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
        Schema::dropIfExists('company_brokers');
    }
}
