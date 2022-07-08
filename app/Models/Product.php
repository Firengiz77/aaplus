<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['name','desc','images','link','category_id'];

    protected $casts = [
        'images' => 'array',
    ];
    

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }
}
