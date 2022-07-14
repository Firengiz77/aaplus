<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\PageResource;
use App\Http\Requests\MessagesRequest;
use Illuminate\Support\Facades\Mail;
use App\Models\Messages;
class MainController extends Controller
{
    public function getPage( $slug = "/" , $project_slug = null,$project_slug2 = null)
    {
     
        $lang = App::getlocale();
        
        if($lang === 'az'){
            $page = Page::where("slug_az", $slug)->first();
        }
        
        else if ($lang == "en") {
    
            $page = Page::where("slug_en", $slug)->first();
        }
        else {
            $page = Page::where("slug_ru", $slug)->first();
        }
      


        $view = $page['viewname'];
        $route = $page['route'];
        $current_route = Route::currentRouteName();
        if (empty($current_route)) {
            $current_route = $route;
        }
        if ($page['parent_id'] > 0) {
            $page_id = $page['parent_id'];
            $current_route = "#";
        } else {
            $page_id = $page['page_id'];
        }
        $fallback = config('app.locale');
        

        $seos = Page::where('on_off',1)->get();
        $pagescollection = PageResource::collection($seos);
        $pagess = $pagescollection->toArray($seos);


        // $feeds = Profile::where('username', 'tuttobellobaku')->first()->refreshFeed(4);
        $feeds = [];

     
            return view('front.pages.' . $view,)->
            with([
            'pagess' => $pagess, 'page' => $page, 
            'route' => $route, 'current_slug' => $slug, 
            'current_route' => $current_route, 
            'page_id' => $page_id,
            "fallback"=>$fallback, 'project_slug'=>$project_slug,'project_slug2'=>$project_slug2,
            'feeds'=>$feeds, 'seos'=>$seos,'pagescollection'=>$pagescollection,'pagess'=>$pagess,
       ]);
    }


    public function getSinglePage( $slug = "/" ,Request $request,$project_slug = null,$project_slug2 = null)
    {
        $lang = App::getlocale();
        // $projects_page_slug = Seo::where('id', 1)->first();
       
        if ($lang == "en") {
            // $projects_page_slug = $projects_page_slug->slug_en;
            $page = Page::where("slug_en", $slug)->first();
        }
        else if ($lang == "ru") {
            // $projects_page_slug = $projects_page_slug->slug_ru;
            $page = Page::where("slug_ru", $slug)->first();
        }
        else{
            // $projects_page_slug = $projects_page_slug->slug_az;
            $page = Page::where("slug_az", $slug)->first();
        }

        $view = $page['viewname'];
        $route = $page['route'];
        $current_route = Route::currentRouteName();
        if (empty($current_route)) {
            $current_route = $route;
        }
        if ($page['parent_id'] > 0) {
            $page_id = $page['parent_id'];
            $current_route = "#";
        } else {
            $page_id = $page['page_id'];
        }
        $fallback = config('app.locale');

        $seos = Page::orderby('id')->get();
        $pagescollection = PageResource::collection($seos);
        $pagess = $pagescollection->toArray($seos);
      return view('front.pages.single',compact('pagess','current_route','page'));
    }





    public static function getChildPage($parent_id): array
    {
        $seos = Page::where('parent_id', $parent_id)->get();
        $pagescollection = PageResource::collection($seos);
        $childPages = $pagescollection->toArray($seos);

        return $childPages;
    }

    public static function getParentPage($page_id): array
    {
        $seos = Page::where('page_id', $page_id)->get();
        $pagescollection = PageResource::collection($seos);
        $parentPages = $pagescollection->toArray($seos);

        return $parentPages;
    }


    public function sendmail2(Request $request,MessagesRequest $request2){
      
        $valiator = $request2->validated();
        $messagess = Messages::create($request2->all());
        $messagess->save();

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'msj'=>'required',
            'surname'=>'required',
            'phone'=>'required',
            'prefix'=>'required'
           
                
        ]);
            
     
        
        $email='firengizsariyeva77@gmail.com'; 
        $array = [
           'name'=> $request->name,
           'email'=> $request->email, 
           'msj'=>$request->msj,
           'surname'=>$request->surname,
           'phone'=>$request->phone,
           'prefix'=>$request->prefix
        ]; 
        Mail::send('front.sendmail', $array,  function ($message) use($email)  {
              $message->to( $email, 'A+A');
              $message->subject('A+A');
           
        });  
          return redirect()->back();
         
    
    }


}
