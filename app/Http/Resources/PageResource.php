<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App;

class PageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $lang = App::getlocale();
        if($lang == 'en'){
            return [
                "id" =>  $this->id ,
                "title" =>  $this->title_en ,
                "description" =>  $this->description_en ,
                "keywords" =>  $this->keywords_en ,
                "slug" =>  $this->slug_en ,
                "created_at" =>  $this->created_at ,
                "updated_at" =>  $this->updated_at ,
                "page_id" =>  $this->page_id ,
                "viewname" =>  $this->viewname ,
                "route" =>  $this->route ,
                "page" =>  $this->page_en ,
                "parent_id" =>  $this->parent_id ,
            ];
        }elseif($lang == 'ru'){
            return [
                "id" =>  $this->id ,
                "slug" =>  $this->slug_ru ,
                "title" =>  $this->title_ru ,
                "description" =>  $this->description_ru ,
                "keywords" =>  $this->keywords_ru ,
                "created_at" =>  $this->created_at ,
                "updated_at" =>  $this->updated_at ,
                "page_id" =>  $this->page_id ,
                "viewname" =>  $this->viewname ,
                "route" =>  $this->route ,
                "page" =>  $this->page_ru ,
                "parent_id" =>  $this->parent_id ,
            ];
        }else{
            return [
                "id" =>  $this->id ,
                "title" =>  $this->title_az ,
                "description" =>  $this->description_az ,
                "keywords" =>  $this->keywords_az ,
                "slug" =>  $this->slug_az ,
                "created_at" =>  $this->created_at ,
                "updated_at" =>  $this->updated_at ,
                "page_id" =>  $this->page_id ,
                "viewname" =>  $this->viewname ,
                "route" =>  $this->route ,
                "page" =>  $this->page_az ,
                "parent_id" =>  $this->parent_id ,

            ];
        }


    }
}
