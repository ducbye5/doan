<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News_infos extends Model
{
    protected $casts = [
        'news_basic_info_total_price' => 'integer',
    ];

    protected $table = 'news_infos';
}
