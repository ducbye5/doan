<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Customers::class, function (Faker $faker) {
    return [
        'email' => 'customer@gmail.com',
        'password' => '$2y$10$pLeF2R25jqteGSTX9nPUz.Bk.TyR/pZpgcVwjLLG1p1WQSBFp6vC.',
        'coint' => 1000,
        'profiles_id' => function () {
            return factory(App\Models\Profiles::class)->create()->id;
        },
        'social_links_id' => function () {
            return factory(App\Models\Social_links::class)->create()->id;
        },
        'created_at' => '2019-01-04 07:37:06',
        'updated_at' => '2019-01-04 07:37:06',
    ];
});
