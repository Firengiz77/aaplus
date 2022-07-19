<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'desc',
        'image',
        'font_size_1',
        'color',
        'font_weight_1',
        'font_weight_2',
        'font_size_2'
    ];
}
