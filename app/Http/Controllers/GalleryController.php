<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Helpers\FileManager;
use Exception;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::get();
       return view('admin.gallery.index',compact('galleries'));
    }
    public function gallery_add(){
        return view('admin.gallery.add');
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
            'image'=>'required|mimes:jpg,png,webp|max:200',
            'gallery_id'=>'nullable',
            'slug_az'=>'required',
            'slug_en'=>'required',
            'slug_ru'=>'required',
      
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = FileManager::fileUpload($request->file('image'), 'gallery');
        }

        Gallery::create([
            'title' => $data['title'],
            'image' => $data['image'],
            'slug_az' => $data['slug_az'],
            'slug_en' => $data['slug_en'],
            'slug_ru' => $data['slug_ru'],
            'gallery_id' => $data['gallery_id'],
        ]);

        toastr()->success('Successfully Added!');

        return redirect()->route('gallery.index');

        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalleryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $gallery = Gallery::where('id',$id)->first();
       return view('admin.gallery.edit',compact('gallery'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGalleryRequest  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $gallery = Gallery::all()->find($id);
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'gallery_id' => 'required',
            'image'=>'required|mimes:jpg,png,webp|max:200',
            'slug_az'=>'required',
            'slug_en'=>'required',
            'slug_ru'=>'required',
        ]);
      
        $data['image'] = $gallery->image;

        if ($request->hasFile('image')) {
            FileManager::fileDelete('gallery', $gallery->image);
            $data['image'] = FileManager::fileUpload($request->file('image'), 'gallery');
        }

        $gallery->update([
            'title' => $data['title'],
            'image' => $data['image'],
            'slug_az' => $data['slug_az'],
            'slug_en' => $data['slug_en'],
            'slug_ru' => $data['slug_ru'],
            'gallery_id' => $data['gallery_id'],
        ]);
        toastr()->success('Successfully Updated!');

        return redirect()->route('gallery.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function delete_gallery($id)
    {
        $gallery = Gallery::all()->find($id);
            FileManager::fileDelete('gallery', $gallery->image);
            $gallery->delete();
            return redirect()->back();
    }
}
