<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::get();
       return view('admin.contact.index',compact('contacts'));
    }
    public function contact_add(){
        return view('admin.contact.add');
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
            'phone1' => 'required',
            'phone2' => 'required',
            'email' => 'required',
            'address'=> 'required',
            'fb'=> 'required',
            'linkedin'=> 'required',
            'insta'=> 'required',
    
          
            
           
        ]);
        Contact::create($data);
        toastr()->success('Successfully Added!');

        return redirect()->route('contact.index');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $contact = Contact::where('id',$id)->first();
       return view('admin.contact.edit',compact('contact'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactRequest  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $pages = Contact::all()->find($id);
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
      

        $pages->update($data);
        toastr()->success('Successfully Updated!');

        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function delete_contact($id)
    {
        $contact = Contact::all()->find($id);
        $contact->delete();
        return redirect()->back();
    }
}
