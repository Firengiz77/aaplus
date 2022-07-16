<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable =['title','desc','image','project_type_id'];

    public function type(){
        return $this->belongsTo('App\Models\Projecttype','project_type_id');
    }
}
