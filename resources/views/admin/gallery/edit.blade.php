@extends('admin.layout.app')

@section('container')
    
  
@include('admin.layout.navbar')

@php
    $galleries = App\Models\Gallery::get();
@endphp

<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Gallery</h4>

              <div class="lang">
                <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
                <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
                <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">Ru</a>
            </div>

              <form class="forms-sample" method="post" action="{{route('gallery.update',[ 'id'=> $gallery->id ])}}" enctype="multipart/form-data">
                  @csrf

                  <div class="form-group ">
                    <div class="form-group">
                        <label for="gallery_id">Select Category:</label>
                        <select class="form-control"  name="gallery_id" id="gallery_id">
                          <option value="0">NoThing</option>
                          @foreach ($galleries as $type )
                              
                          <option value="{{ $type->id }}" @if($type->id == $gallery->gallery_id) selected @endif  >{!! json_decode($type['title'])->{app()->getLocale()} !!}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>


                  
                  <div class="form-group translate">
                    <label for="title">Title</label>
                    <input type="hidden" name="title" value="{{ $gallery->title }}">
                    <textarea required class="form-control" >{!! json_decode($gallery['title'])->{app()->getLocale()} !!}</textarea>
                  </div>
               
                    <img class="card-img-top" style="border-radius:34%;width:8%;height:5%;margin-bottom:18px" src="{{  (!empty($gallery->image)? url('uploads/gallery/'.$gallery->image):url('uploads/gallery/icon-admin.png')  )}}" >
                     
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" id="image" >
                  </div>

                  <div class="form-group ">
                    <label for="slug_az">Slug (az)</label>
                    <input type="text" class="form-control" name="slug_az" value="{{ $gallery->slug_az }}" >
                  </div>

                  <div class="form-group">
                    <label for="slug_en">Slug (en)</label>
                    <input type="text" class="form-control" name="slug_en" value="{{ $gallery->slug_az }}">
                  </div>
                  
                  <div class="form-group">
                    <label for="slug_ru">Slug (ru)</label>
                    <input type="text" class="form-control" name="slug_ru" value="{{ $gallery->slug_az }}">
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
<script src="{{ asset('/admin/js/translate.js') }}"></script>
{{-- <script src="{{ asset('/admin/vendors/ckeditor/ckeditor.js') }}"></script> --}}
{{-- <script src="{{ asset('/admin/js/cketditor.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('back/assets/js/swal.js') }}"></script>

@endsection