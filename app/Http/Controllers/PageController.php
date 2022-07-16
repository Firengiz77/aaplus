<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePageRequest;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::get();
       return view('admin.page.index',compact('pages'));
    }
    public function page_add(){
        return view('admin.page.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'page_az' => 'required',
            'page_en' => 'required',
            'page_ru' => 'required',
            'slug_az'=> 'required',
            'slug_en'=> 'required',
            'slug_ru'=> 'required',
    
            'title_az'=> 'required',
            'title_en'=> 'required',
            'title_ru'=> 'required',
            'description_en'=> 'required',
            'description_az'=> 'required',
            'description_ru'=> 'required',
    
            'keywords_az'=> 'required',
            'keywords_en'=> 'required',
            'keywords_ru'=> 'required',
            'viewname'=> 'required',
            'route'=> 'required',
            'parent_id'=> 'required',
            'page_id' => 'required',
            'on_off'=>'required'
            
           
        ]);
        if(isset($request->on_off)){
            $request->on_off = 1 ;
        }
      
        Page::create($data);
        toastr()->success('Successfully Added!');

        return redirect()->route('page.index');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $pages = Page::where('id',$id)->first();
       return view('admin.page.edit',compact('pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePageRequest  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $pages = Page::all()->find($id);
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'page_az' => 'nullable',
            'page_en' => 'nullable',
            'page_ru' => 'nullable',
            'slug_az'=> 'nullable',
            'slug_en'=> 'nullable',
            'slug_ru'=> 'nullable',
    
            'title_az'=> 'nullable',
            'title_en'=> 'nullable',
            'title_ru'=> 'nullable',
            'description_en'=> 'nullable',
            'description_az'=> 'nullable',
            'description_ru'=> 'nullable',
    
            'keywords_az'=> 'nullable',
            'keywords_en'=> 'nullable',
            'keywords_ru'=> 'nullable',
            'viewname'=> 'nullable',
            'route'=> 'nullable',
            'parent_id'=> 'nullable',
            'page_id' => 'nullable',
            'on_off'=>'nullable'
        ]);

        if(!isset($request->on_off)){
            $pages->on_off = false ;
        }
       

        $pages->update($data);
        toastr()->success('Successfully Updated!');

        return redirect()->route('page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function delete_page($id)
    {
        $page = Page::all()->find($id);
        $page->delete();
        return redirect()->back();
    }
}
