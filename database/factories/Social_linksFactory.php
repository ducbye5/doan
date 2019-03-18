<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Social_links::class, function (Faker $faker) {
    return [
        'facebook' => 'https://www.facebook.com/',
        'twitter' => 'https://www.facebook.com/',
        'linkedin' => 'https://www.facebook.com/',
        'pinterest' => 'https://www.facebook.com/',
        'skype' => 'https://www.facebook.com/',
        'created_at' => '2019-01-04 07:37:06',
        'updated_at' => '2019-01-04 07:37:06',
    ];
});
