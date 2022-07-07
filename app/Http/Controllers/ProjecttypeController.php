<?php

namespace App\Http\Controllers;

use App\Models\Projecttype;
use App\Http\Requests\StoreProjecttypeRequest;
use App\Http\Requests\UpdateProjecttypeRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class ProjecttypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projecttypes = Projecttype::get();
       return view('admin.projecttype.index',compact('projecttypes'));
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
           
        ]);
        Projecttype::create($data);
        toastr()->success('Successfully Added!');

        return redirect()->route('project_type.index');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjecttypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjecttypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projecttype  $projecttype
     * @return \Illuminate\Http\Response
     */
    public function show(Projecttype $projecttype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projecttype  $projecttype
     * @return \Illuminate\Http\Response
     */
  


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactRequest  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $projecttype = Projecttype::all()->find($id);
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
      
        $projecttype->update($data);
        toastr()->success('Successfully Updated!');

        return redirect()->route('project_type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function delete_project_type($id)
    {
        $projecttypes = Projecttype::all()->find($id);
        $projecttypes->delete();
        return redirect()->back();
    }
}