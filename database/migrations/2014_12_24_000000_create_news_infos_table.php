<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('news_picture');
            $table->string('news_basic_info_title',100);
            $table->string('news_basic_info_type',8);
            $table->string('news_basic_info_typeofproperties',17);
            $table->string('news_basic_info_acreage');
            $table->string('news_basic_info_price');
            $table->string('news_basic_info_unit');
            $table->string('news_basic_info_address');
            $table->integer('news_other_info_numberbedrooms')->nullable();
            $table->integer('news_other_info_numbertoilets')->nullable();
            $table->string('news_calendar_typeofcost');
            $table->date('news_calendar_timestart');
            $table->date('news_calendar_timefinish');
            $table->integer('news_detail_id')->unsigned();
            $table->foreign('news_detail_id')->references('id')->on('news_details');
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
        Schema::dropIfExists('new_infos');
    }
}
