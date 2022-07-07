@extends('admin.layout.app')

@section('container')
    
  
@include('admin.layout.navbar')



<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Contact</h4>

              
              <form class="forms-sample" method="post" action="{{route('contact.update',[ 'id'=> $contact->id ])}}" >
                  @csrf
                  
                  <div class="form-group">
                    <label for="phone1">Phone 1</label>
                    <input type="text" name="phone1" class="form-control" id="phone1" placeholder="{{ $contact->phone1 }}" value="{{ $contact->phone1 }}">
                  </div>

                <div class="form-group">
                  <label for="phone2">Phone 2</label>
                  <input type="text" name="phone2" class="form-control" id="phone2" placeholder="{{ $contact->phone2 }}" value="{{ $contact->phone2 }}">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" class="form-control" id="address"  placeholder="{{ $contact->address }}" value="{{ $contact->address }}">
                </div>
                
                <div class="form-group">
                    <label for="email">Email </label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="{{ $contact->email }}" value="{{ $contact->email }}">
                  </div>

                <div class="form-group">
                  <label for="fb">Facebook Link</label>
                  <input type="text" name="fb" class="form-control" id="fb" placeholder="{{ $contact->fb }}" value="{{ $contact->fb }}">
                </div>
                <div class="form-group">
                  <label for="insta">Instagram Link</label>
                  <input type="text" name="insta" class="form-control" id="insta" placeholder="{{ $contact->insta }}"  value="{{ $contact->insta }}" >
                </div>

                <div class="form-group">
                    <label for="linkedin">Linkedin Link</label>
                    <input type="text" name="linkedin" class="form-control" id="linkedin" placeholder="{{ $contact->linkedin }}"  value="{{ $contact->linkedin }}" >
                  </div>

              

             
              
                <button type="submit" class="btn btn-primary me-2">Submit</button>
           
              </form>
            </div>
          </div>
        </div>

    </div>
</div>
</div>



 

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('back/assets/js/swal.js') }}"></script>

@endsection