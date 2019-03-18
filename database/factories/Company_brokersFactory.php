<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Company_brokers::class, function (Faker $faker) {
    return [
        'broker_name' => 'Andrew MCCarthy',
        'broker_avatar' => 'team-1.jpg',
        'broker_telephone' => '84966291020',
        'broker_fax' => '02743567225',
        'broker_mail' => 'realestast@gmail.com',
        'broker_facebook' => 'https://www.facebook.com/',
        'broker_twitter' => 'https://twitter.com/',
        'broker_linkedin' => 'https://www.linkedin.com/',
        'broker_skype' => 'https://www.skype.com/',
        'broker_slack' => 'https://www.slack.com/',
        'broker_description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'broker_level' => 3,
        'company_id' => 1,
        'created_at' => '2019-01-04 07:37:06',
        'updated_at' => '2019-01-04 07:37:06',
    ];
});
