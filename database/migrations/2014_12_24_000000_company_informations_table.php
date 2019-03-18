<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('office_branch');
            $table->string('office_address');
            $table->string('office_telephone');
            $table->string('office_fax');
            $table->string('office_mail');
            $table->string('office_facebook');
            $table->string('office_twitter');
            $table->string('office_linkedin');
            $table->string('office_skype');
            $table->string('office_slack');
            $table->integer('office_priority');
            $table->string('ceo_name');
            $table->string('ceo_avatar');
            $table->string('ceo_description',1000);
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
        Schema::dropIfExists('company_informations');
    }
}
