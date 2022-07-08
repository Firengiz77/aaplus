@extends('admin.layout.app')

@section('container')
    
  
@include('admin.layout.navbar')



<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Product</h4>

              
              <div class="lang">
                <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
                <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
                <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">Ru</a>
            </div>


              <form class="forms-sample" method="post" action="{{route('product.update',[ 'id'=> $product->id ])}}" enctype="multipart/form-data">
                  @csrf
                  
                  <div class="form-group">
                    {{-- <label for="project_type_id">Select Project Type</label>
                    <input type="text" name="project_type_id" > --}}
                    <div class="form-group">
                      <label for="category_id">Select Category</label>
                      <select class="form-control"  name="category_id" id="category_id">
                        @foreach ($types as $type )
                        <option value="{{ $type->id }}" @if($type->id == $product->category_id) selected @endif   >{!! json_decode($type['name'])->{app()->getLocale()} !!}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group translate">
                    <label for="name">Name</label>
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <textarea required class="form-control" >{!! json_decode($product['name'])->{app()->getLocale()} !!}</textarea>
                  </div>

                  <div class="form-group translate">
                    <label for="desc">Description</label>
                    <input type="hidden" name="desc" value="{{ $product->desc }}">
                    <textarea required class="form-control" >{!! json_decode($product['desc'])->{app()->getLocale()} !!}</textarea>
                  </div>

                  <div class="form-group ">
                    <label for="link">Link (can be null)</label>
                    <input type="text"  class="form-control"  name="link" value="{{ $product->link }}">
                  </div>
           
                  <div class="form-group">
                    <label for="images">Multiple Image</label>
                    <input type="file" name="images[]"  multiple class="form-control" id="images" >
                  </div>

                  <div class="upload-box">
                    @foreach ($product->images as $image)
                        <div class="image-box">
                            <img src="{{ asset('uploads/product/' . $image) }}" width="150" alt="">
                        </div>
                    @endforeach

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