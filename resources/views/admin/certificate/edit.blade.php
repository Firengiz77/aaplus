@extends('admin.layout.app')

@section('container')
    
  
@include('admin.layout.navbar')



<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Certificate</h4>

              <form class="forms-sample" method="post" action="{{route('certificate.update',[ 'id'=> $certificate->id ])}}" enctype="multipart/form-data">
                  @csrf
               
                    <img class="card-img-top" style="border-radius:34%;width:8%;height:5%;margin-bottom:18px" src="{{  (!empty($certificate->image)? url('uploads/certificate/'.$certificate->image):url('uploads/certificate/icon-admin.png')  )}}" >
                     
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" id="image" >
                  </div>

          
             {{-- image --}}
           
                <button type="submit" class="btn btn-primary me-2">Submit</button>
           
              </form>
            </div>
          </div>
        </div>

    </div>
</div>
</div>



 
<script src="{{ asset('/admin/js/file-upload.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('back/assets/js/swal.js') }}"></script>

@endsection