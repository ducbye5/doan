<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social_links extends Model
{
    protected $fillable = [
    	'facebook',
    	'twitter',
    	'linkedin',
    	'pinterest',
    ];

    protected $table = 'social_links';
}
