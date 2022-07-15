<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable =['name','category_id','icon','slug_az','slug_en','slug_ru'];


    public function category(){
        return $this->belongsTo( '\App\Models\Category','category_id');
    }


}
