<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Company_informations::class, function (Faker $faker) {
    return [
    	'office_branch' => 'Viet Nam',
        'office_address' => 'HITC Building , 239 Xuân Thủy , Cầu Giấy , Hà Nội',
        'office_telephone' => '84966291020',
        'office_fax' => '02743567225',
        'office_mail' => 'realestast@gmail.com',
        'office_facebook' => 'https://www.facebook.com/',
        'office_twitter' => 'https://twitter.com/',
        'office_linkedin' => 'https://www.linkedin.com/',
        'office_skype' => 'https://www.skype.com/',
        'office_slack' => 'https://www.slack.com/',
        'office_priority' => 1,
        'ceo_name' => 'Andrew MCCarthy',
        'ceo_avatar' => 'team-1.jpg',
        'ceo_description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'created_at' => '2019-01-04 07:37:06',
        'updated_at' => '2019-01-04 07:37:06',
    ];
});
