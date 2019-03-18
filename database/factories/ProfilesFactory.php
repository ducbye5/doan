<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Profiles::class, function (Faker $faker) {
    return [
        'profile_fullname' => 'Nguyễn Văn A',
        'profile_avatar' => 'default.png',
        'profile_sex' => null,
        'profile_birthday' => '2019-01-04 07:37:06',
        'profile_address' => null,
        'profile_telephone' => null,
        'profile_description' => null,
        'created_at' => '2019-01-04 07:37:06',
        'updated_at' => '2019-01-04 07:37:06',
    ];
});
