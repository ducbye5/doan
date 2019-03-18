<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'email' => 'admin@gmail.com',
        'password' => '$2y$10$9S.sOadAQUd9u7iiG9nKbuV4Yhs3cInxqT8IXhfZmlCBJKaG4RVKq', // secret
        'role' => 'administrator',
        'active' => 'enable',
        'profile_id' => function () {
            return factory(App\Models\Profiles::class)->create()->id;
        },
        'social_links_id' => function () {
            return factory(App\Models\Social_links::class)->create()->id;
        },
        'remember_token' => str_random(10),
        'created_at' => '2018-10-08 00:00:00',
        'updated_at' => '2018-10-08 00:00:00'
    ];
});
