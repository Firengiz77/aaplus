<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use App\Http\Requests\StoreCounterRequest;
use App\Http\Requests\UpdateCounterRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counters = Counter::get();
       return view('admin.counter.index',compact('counters'));
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
            'number' => 'required',
           
        ]);
        Counter::create($data);
        toastr()->success('Successfully Added!');

        return redirect()->route('counter.index');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCounterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCounterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function show(Counter $counter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $counter = Counter::where('id',$id)->first();
       return view('admin.counter.edit',compact('counter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCounterRequest  $request
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $counter = Counter::all()->find($id);
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'phone1' => 'required',
            'phone2' => 'required',
            'email' => 'required',
            'address'=> 'required',
            'fb'=> 'required',
            'linkedin'=> 'required',
            'insta'=> 'required',
        ]);
      

        $counter->update($data);
        toastr()->success('Successfully Updated!');

        return redirect()->route('counter.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function delete_counter($id)
    {
        $counter = Counter::all()->find($id);
        $counter->delete();
        return redirect()->back();
    }
}
