<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use App\Helpers\FileManager;
use App\Models\Projecttype;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
       return view('admin.category.index',compact('categories'));
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
            'category_id'=>'required',
        ]);

        Category::create([
            'name' => $data['name'],
            'category_id' => $data['category_id'],
        ]);

        toastr()->success('Successfully Added!');

        return redirect()->route('category.index');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $category = Category::all()->find($id);
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category_id'=>'required',
        ]);
      
        $category->update([
            'name' => $data['name'],
            'category_id' => $data['category_id'],
        ]);
        toastr()->success('Successfully Updated!');

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete_category($id)
    {
        $category = Category::all()->find($id);
        $category->delete();
        return redirect()->back();
    }
}
