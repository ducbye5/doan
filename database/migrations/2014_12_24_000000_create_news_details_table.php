<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('news_basic_info_country')->nullable();
            $table->string('news_basic_info_city')->nullable();
            $table->string('news_basic_info_district')->nullable();
            $table->string('news_basic_info_ward')->nullable();
            $table->string('news_basic_info_street')->nullable();
            $table->string('news_basic_info_project')->nullable();
            $table->text('news_description_info',3000);
            $table->string('news_other_info_facade')->nullable();
            $table->string('news_other_info_directionhouse')->nullable();
            $table->string('news_other_info_directionbalcony')->nullable();
            $table->string('news_other_info_numberfloors')->nullable();
            $table->string('news_contact_info_mobilephone');
            $table->string('news_contact_info_email')->nullable();
            $table->string('news_contact_info_name')->nullable();
            $table->string('news_contact_info_address')->nullable();
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
        Schema::dropIfExists('new_details');
    }
}
