<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Http\Request;
use App\Helpers\FileManager;
use App\Models\Projecttype;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get();
        $types = Projecttype::get();
       return view('admin.project.index',compact('projects','types'));
    }

    public function project_add(){
        $types = Projecttype::get();

        return view('admin.project.add',compact('types'));
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
            'project_type_id'=>'required',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = FileManager::fileUpload($request->file('image'), 'project');
        }
       

        Project::create([
            'title' => $data['title'],
            'desc' => $data['desc'],
            'image' => $data['image'],
            'project_type_id' => $data['project_type_id'],
        ]);

        toastr()->success('Successfully Added!');

        return redirect()->route('project.index');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $project = Project::where('id',$id)->first();
       return view('admin.project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $project = Project::all()->find($id);
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'desc' => 'required',
            'image'=>'required|mimes:jpg,png,webp|max:200',
            'project_type_id'=>'required',
        ]);
      
        $data['image'] = $project->image;

        if ($request->hasFile('image')) {
            FileManager::fileDelete('project', $project->image);
            $data['image'] = FileManager::fileUpload($request->file('image'), 'project');
        }


        $project->update([
            'title' => $data['title'],
            'desc' => $data['desc'],
            'image' => $data['image'],
            'project_type_id' => $data['project_type_id'],
        ]);
        toastr()->success('Successfully Updated!');

        return redirect()->route('project.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function delete_project($id)
    {
        $project = Project::all()->find($id);
        $project->delete();
        return redirect()->back();
    }
}
