<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'page_az',
        'page_en',
        'page_ru',
        'slug_az',
        'slug_en',
        'slug_ru',

        'title_az',
        'title_en',
        'title_ru',
        'description_en',
        'description_az',
        'description_ru',

        'keywords_az',
        'keywords_en',
        'keywords_ru',
        'viewname',
        'route',
        'parent_id',
        'page_id',
        'on_off',
    ];
}
