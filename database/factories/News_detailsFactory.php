<?php

use Faker\Generator as Faker;

$factory->define(App\Models\News_details::class, function (Faker $faker) {
    return [
    	'news_basic_info_country' => 'Viet Nam',
    	'news_basic_info_city' => 'Hà nội',
    	'news_basic_info_district' => 'Gia Lâm',
    	'news_basic_info_ward' => null,
    	'news_basic_info_street' => null,
    	'news_basic_info_project' => null,
    	'news_other_info_facade' => null,
    	'news_other_info_directionhouse' => null,
    	'news_other_info_directionbalcony' => null,
    	'news_other_info_numberfloors' => null,
    	'news_contact_info_mobilephone' => 1234567897,
    	'news_contact_info_email' => null,
    	'news_contact_info_name' => null,
    	'news_contact_info_address' => null,
        'created_at' => '2019-01-04 07:37:06',
        'updated_at' => '2019-01-04 07:37:06',
    ];
});
