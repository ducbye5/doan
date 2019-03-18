<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post_news_histories::class, function (Faker $faker) {
    return [
    	'customer_id' => 1,
    	'news_infos_id' => function () {
            return factory(App\Models\News_infos::class)->create()->id;
        },
    	'post_news_fees' => 15,
        'created_at' => '2019-01-04 07:37:06',
        'updated_at' => '2019-01-04 07:37:06',
    ];
});
