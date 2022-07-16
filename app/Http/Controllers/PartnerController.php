<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use Illuminate\Http\Request;
use App\Helpers\FileManager;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::get();
       return view('admin.partners.index',compact('partners'));
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
            'image'=>'required|mimes:jpg,png,webp|max:200',
      
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = FileManager::fileUpload($request->file('image'), 'partner');
        }

        Partner::create([
            'image' => $data['image'],
        ]);

        toastr()->success('Successfully Added!');

        return redirect()->route('partners.index');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePartnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartnerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $partner = Partner::where('id',$id)->first();
       return view('admin.partners.edit',compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartnerRequest  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $partner = Partner::all()->find($id);
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'image'=>'required|mimes:jpg,png,webp|max:200',
        ]);
      
        $data['image'] = $partner->image;

        if ($request->hasFile('image')) {
            FileManager::fileDelete('partner', $partner->image);
            $data['image'] = FileManager::fileUpload($request->file('image'), 'partner');
        }

        $partner->update([
            'image' => $data['image'],
        ]);
        toastr()->success('Successfully Updated!');

        return redirect()->route('partners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function delete_partners($id)
    {
        $partner = Partner::all()->find($id);
        $partner->delete();
        return redirect()->back();
    }
}
