@extends('admin.layout.app')

@section('container')
    
  
@include('admin.layout.navbar')



<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Product</h4>

              <div class="lang">
                <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
                <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
                <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">Ru</a>
            </div>


              <form class="forms-sample" method="POST" action="{{route('product.add')}}" enctype="multipart/form-data">
                  @csrf
                  
                  <div class="form-group">
                    {{-- <label for="project_type_id">Select Project Type</label>
                    <input type="text" name="project_type_id" > --}}
                    <div class="form-group">
                      <label for="category_id">Select Category Type</label>
                      <select class="form-control"  name="category_id" id="category_id">
                        @foreach ($types as $type )
                        <option value="{{ $type->id }}">{!! json_decode($type['name'])->{app()->getLocale()} !!}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group translate">
                    <label for="name">Name</label>
                    <input type="hidden" name="name" value='{"az":"","en":"","ru":""}'>
                    <textarea required class="form-control" ></textarea>
                  </div>
                  
                  <div class="form-group translate">
                    <label for="title">Title</label>
                    <input type="hidden" name="title" value='{"az":"","en":"","ru":""}'>
                    <textarea required class="form-control" ></textarea>
                  </div>

                  <div class="form-group translate">
                    <label for="desc">Description</label>
                    <input type="hidden" name="desc" value='{"az":"","en":"","ru":""}'>
                    <textarea required class="form-control" ></textarea>
                  </div>

                  <div class="form-group ">
                    <label for="slug_az">Slug (az)</label>
                    <input type="text" name="slug_az" class="form-control" >
                  </div>
                  <div class="form-group ">
                    <label for="slug_en">Slug (en)</label>
                    <input type="text" name="slug_en" class="form-control" >
                  </div>
                  <div class="form-group ">
                    <label for="slug_ru">Slug (ru)</label>
                    <input type="text" name="slug_ru" class="form-control">
                  </div>
                  

                  <div class="form-group ">
                    <label for="link">Link (can be null)</label>
                    <input type="text"  class="form-control"  name="link">
                  </div>


                  <div class="form-group">
                    <label for="images">Multiple Images</label>
                    <input type="file" name="images[]" multiple class="form-control" id="images" >
                  </div>

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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('back/assets/js/swal.js') }}"></script>

@endsection