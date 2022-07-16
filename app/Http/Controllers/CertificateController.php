<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;
use Illuminate\Http\Request;
use App\Helpers\FileManager;
use Illuminate\Support\Facades\Validator;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = Certificate::get();
       return view('admin.certificate.index',compact('certificates'));
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
            $data['image'] = FileManager::fileUpload($request->file('image'), 'certificate');
        }

        Certificate::create([
            'image' => $data['image'],
        ]);

        toastr()->success('Successfully Added!');

        return redirect()->route('certificate.index');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCertificateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCertificateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $certificate = Certificate::where('id',$id)->first();
       return view('admin.certificate.edit',compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCertificateRequest  $request
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $certificate = Certificate::all()->find($id);
        $data = $request->all();
        $validator = Validator::make($request->all(), [
        
            'image'=>'required|mimes:jpg,png,webp|max:200',
        ]);
      
        $data['image'] = $certificate->image;

        if ($request->hasFile('image')) {
            FileManager::fileDelete('certificate', $certificate->image);
            $data['image'] = FileManager::fileUpload($request->file('image'), 'certificate');
        }

        $certificate->update([
         
            'image' => $data['image'],
        ]);
        toastr()->success('Successfully Updated!');

        return redirect()->route('certificate.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function delete_certificate($id)
    {
        $certificate = Certificate::all()->find($id);
        $certificate->delete();
        return redirect()->back();
    }
}
