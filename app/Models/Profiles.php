<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    protected $fillable = [
     'profile_fullname',
     'profile_avatar',
     'profile_birthday',
     'profile_address',
     'profile_telephone',
     'profile_description',
    ];
}
