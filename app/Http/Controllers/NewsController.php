<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Http\Request;
use App\Helpers\FileManager;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::get();
       return view('admin.news.index',compact('news'));
    }
    public function news_add(){
        return view('admin.news.add');
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
            'title' => 'required',
            'desc' => 'required',
            'thumbnail'=>'required|mimes:jpg,png,webp|max:200',
            'images'=>'required|mimes:jpg,png,webp|max:200',
        ]);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = FileManager::fileUpload($request->file('thumbnail'), 'news');
        }
        if ($request->hasFile('images')) {
            $data['images'] = [];
            foreach ($request->file('images') as $key => $file) {
                $data['images'][$key] = FileManager::fileUpload($file, 'news');
            }
        }

        News::create([
            'title' => $data['title'],
            'desc' => $data['desc'],
            'thumbnail' => $data['thumbnail'],
            'images' => $data['images'],
        ]);

        toastr()->success('Successfully Added!');

        return redirect()->route('news.index');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $news = News::where('id',$id)->first();
       return view('admin.news.edit',compact('news'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsRequest  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $news = News::all()->find($id);
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'desc' => 'required',
            'thumbnail'=>'required'
          //  'image'=>'required|mimes:jpg,png,webp|max:200',
        ]);
      
        $data['thumbnail'] = $news->thumbnail;

        if ($request->hasFile('thumbnail')) {
            FileManager::fileDelete('news', $news->thumbnail);
            $data['thumbnail'] = FileManager::fileUpload($request->file('thumbnail'), 'news');
        }

        $data['images'] = $news->images;
        if ($request->hasFile('images')) {
            $data['images'] = [];
            foreach ($news->images as $img) {
                FileManager::fileDelete('news', $img);
            }
            foreach ($request->file('images') as $key => $file) {
                $data['images'][$key] = FileManager::fileUpload($file, 'news');
            }
        }

        $news->update([
            'title' => $data['title'],
            'desc' => $data['desc'],
            'thumbnail' => $data['thumbnail'],
            'images' => $data['images'],
        ]);
        toastr()->success('Successfully Updated!');

        return redirect()->route('news.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function delete_news($id)
    {
        $news = News::all()->find($id);
        $news->delete();
        return redirect()->back();
    }
}
