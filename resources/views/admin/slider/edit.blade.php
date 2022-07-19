@extends('admin.layout.app')

@section('container')
    
  
@include('admin.layout.navbar')



<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Slider</h4>

              
              <div class="lang">
                <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
                <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
                <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">Ru</a>
            </div>


              <form class="forms-sample" method="post" action="{{route('slider.update',[ 'id'=> $slider->id ])}}" enctype="multipart/form-data">
                  @csrf
                  
                  <div class="form-group translate">
                    <label for="title">Title</label>
                    <input type="hidden" name="title" value="{{ $slider->title }}">
                    <textarea  required class="form-control" >{!! json_decode($slider['title'])->{app()->getLocale()} !!}</textarea>
                  </div>

                  <div class="form-group">
                    <label for="title">Font Size</label>
                    <input type="text"  class="form-control" name="font_size_1" value="{{ $slider->font_size_1 }}"> 
                  </div>
                  
                  <div class="form-group">
                    <label for="title">Font Weight</label>
                    <input type="text"  class="form-control" name="font_weight_1" value="{{ $slider->font_weight_1 }}">
                  </div>


                  <div class="form-group translate">
                    <label for="desc">Description</label>
                    <input type="hidden" name="desc" value="{{ $slider->desc }}">
                    <textarea required class="form-control" >{!! json_decode($slider['desc'])->{app()->getLocale()} !!}</textarea>
                  </div>

                  <div class="form-group">
                    <label for="title">Font Size</label>
                    <input type="text"  class="form-control" name="font_size_2" value="{{ $slider->font_size_2 }}"> 
                  </div>
                  
                  <div class="form-group">
                    <label for="title">Font Weight</label>
                    <input type="text"  class="form-control" name="font_weight_2" value="{{ $slider->font_weight_2 }}">
                  </div>
              
       
                  <div class="form-group">
                    <label for="title"> Color </label>
                    <input type="text"  class="form-control" name="color" value="{{ $slider->color }}">
                  </div>


               
                    <img class="card-img-top" style="border-radius:34%;width:8%;height:5%;margin-bottom:18px" src="{{  (!empty($slider->image)? url('uploads/slider/'.$slider->image):url('uploads/slider/icon-admin.png')  )}}" >
                     
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
<script src="{{ asset('/admin/js/translateandckeditor.js') }}"></script>
<script src="{{ asset('/admin/js/cketditor.js') }}"></script>
<script src="{{ asset('/admin/vendors/ckeditor/ckeditor.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('back/assets/js/swal.js') }}"></script>

@endsection