<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use Illuminate\Http\Request;
use App\Helpers\FileManager;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::get();
       return view('admin.slider.index',compact('sliders'));
    }
    public function slider_add(){
        return view('admin.slider.add');
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
            'image'=>'required|mimes:jpg,png,webp|max:200',
            'font_size_1'=>'required',
            'font_size_2'=>'required',
            'color'=>'required',
            'font_weight_2'=>'required',
            'font_weight_1'=>'required',
      
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = FileManager::fileUpload($request->file('image'), 'slider');
        }

        Slider::create([
            'title' => $data['title'],
            'desc' => $data['desc'],
            'image' => $data['image'],
            'font_size_1' => $data['font_size_1'],
            'font_size_2' => $data['font_size_2'],
            'color' => $data['color'],
            'font_weight_1' => $data['font_weight_2'],
            'font_weight_1' => $data['font_weight_1'],
        ]);

        toastr()->success('Successfully Added!');

        return redirect()->route('slider.index');

        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSliderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSliderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $slider = Slider::where('id',$id)->first();
       return view('admin.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSliderRequest  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $slider = Slider::all()->find($id);
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'desc' => 'required',
            'image'=>'required|mimes:jpg,png,webp|max:200',
            'font_size_1'=>'required',
            'font_size_2'=>'required',
            'color'=>'required',
            'font_weight_2'=>'required',
            'font_weight_1'=>'required',
        ]);
      
        $data['image'] = $slider->image;

        if ($request->hasFile('image')) {
            FileManager::fileDelete('slider', $slider->image);
            $data['image'] = FileManager::fileUpload($request->file('image'), 'slider');
        }

        $slider->update([
            'title' => $data['title'],
            'desc' => $data['desc'],
            'image' => $data['image'],
            'font_size_1' => $data['font_size_1'],
            'font_size_2' => $data['font_size_2'],
            'color' => $data['color'],
            'font_weight_1' => $data['font_weight_1'],
            'font_weight_2' => $data['font_weight_2'],
        ]);
        toastr()->success('Successfully Updated!');

        return redirect()->route('slider.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function delete_slider($id)
    {
        $slider = Slider::all()->find($id);
        $slider->delete();
        return redirect()->back();
    }
}
