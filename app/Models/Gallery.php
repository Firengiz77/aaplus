<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'gallery_id',
        'slug_az',
        'slug_en',
        'slug_ru'
    ];
        public function gallery(){
            return $this->belongsTo('App\Models\Gallery','gallery_id');
        }

}
