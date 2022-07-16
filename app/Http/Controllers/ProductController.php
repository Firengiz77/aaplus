<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use App\Helpers\FileManager;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
       return view('admin.product.index',compact('products'));
    }
    public function product_add(){
        $types = Category::get();

        return view('admin.product.add',compact('types'));
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
            'name' => 'required',
            'desc' => 'required',
            'link'=>'nullable',
            'slug_az'=>'required',
            'slug_en'=>'required',
            'slug_ru'=>'required',
            'title'=>'required',
            'category_id'=>'required',
            'images'=>'required|mimes:jpg,png,webp|max:200',
        ]);

      
        if ($request->hasFile('images')) {
            $data['images'] = [];
            foreach ($request->file('images') as $key => $file) {
                $data['images'][$key] = FileManager::fileUpload($file, 'product');
            }
        }

        Product::create([
            'name' => $data['name'],
            'desc' => $data['desc'],
            'link' => $data['link'],
            'category_id' => $data['category_id'],
            'images' => $data['images'],
            'slug_az' => $data['slug_az'],
            'slug_en' => $data['slug_en'],
            'slug_ru' => $data['slug_ru'],
            'title' => $data['title'],
        ]);

        toastr()->success('Successfully Added!');

        return redirect()->route('product.index');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $product = Product::where('id',$id)->first();
       $types = Category::get();
       return view('admin.product.edit',compact('product','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $product = Product::all()->find($id);
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'desc' => 'required',
            'link'=>'nullable',
            'slug_az'=>'required',
            'title'=>'required',
            'slug_en'=>'required',
            'slug_ru'=>'required',
            'category_id'=>'required',
           // 'images'=>'required|mimes:jpg,png,webp|max:200',
        ]);
      
        $data['images'] = $product->images;
        if ($request->hasFile('images')) {
            $data['images'] = [];
            foreach ($product->images as $img) {
                FileManager::fileDelete('product', $img);
            }
            foreach ($request->file('images') as $key => $file) {
                $data['images'][$key] = FileManager::fileUpload($file, 'product');
            }
        }

        $product->update([
            'name' => $data['name'],
            'desc' => $data['desc'],
            'link' => $data['link'],
            'category_id' => $data['category_id'],
            'images' => $data['images'],
            'slug_az' => $data['slug_az'],
            'slug_en' => $data['slug_en'],
            'slug_ru' => $data['slug_ru'],
            'title' => $data['title'],
        ]);
        toastr()->success('Successfully Updated!');

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete_product($id)
    {
        $product = Product::all()->find($id);
        $product->delete();
        return redirect()->back();
    }
}
