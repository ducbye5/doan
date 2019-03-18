<?php

use Faker\Generator as Faker;

$factory->define(App\Models\News_infos::class, function (Faker $faker) {
    return [
    	'news_picture' => 'slider1.jpg',
    	'news_basic_info_title' => 'rent house',
    	'news_basic_info_type' => 'Goodwill',
    	'news_basic_info_typeofproperties' => 'Dwelling_House',
    	'news_basic_info_acreage' => 100,
    	'news_basic_info_price' => 20000,
    	'news_basic_info_unit' => 'Dollar',
        'news_basic_info_total_price' => 20000,
    	'news_basic_info_address' => 'Gia Lâm - Hà nội - Viet Nam',
    	'news_description_info' => '1234567899',
    	'news_other_info_numberbedrooms' => 3,
    	'news_other_info_numbertoilets' => 2,
    	'news_calendar_typeofcost' => 'Vip',
    	'news_calendar_timestart' => '2019-01-04',
    	'news_calendar_timefinish' => '2019-01-11',
        'prioritize_01' => 2,
    	'news_detail_id' => function () {
            return factory(App\Models\News_details::class)->create()->id;
        },
        'created_at' => '2019-01-04 07:37:06',
        'updated_at' => '2019-01-04 07:37:06',
    ];
});
