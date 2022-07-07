@extends('admin.layout.app')

@section('container')
    
  
@include('admin.layout.navbar')



<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit News</h4>

              
              <div class="lang">
                <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
                <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
                <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">Ru</a>
            </div>


              <form class="forms-sample" method="post" action="{{route('news.update',[ 'id'=> $news->id ])}}" enctype="multipart/form-data">
                  @csrf
                  
                  <div class="form-group translate">
                    <label for="title">Title</label>
                    <input type="hidden" name="title" value="{{ $news->title }}">
                    <textarea required class="form-control" >{!! json_decode($news['title'])->{app()->getLocale()} !!}</textarea>
                  </div>

                  <div class="form-group translate">
                    <label for="desc">Description</label>
                    <input type="hidden" name="desc" value="{{ $news->desc }}">
                    <textarea required class="form-control" >{!! json_decode($news['desc'])->{app()->getLocale()} !!}</textarea>
                  </div>

                    <img class="card-img-top" style="border-radius:34%;width:8%;height:5%;margin-bottom:18px" src="{{  (!empty($news->thumbnail)? url('uploads/news/'.$news->thumbnail):url('uploads/news/icon-admin.png')  )}}" >
                     
                  <div class="form-group">
                    <label for="thumbnail">Thumbnails</label>
                    <input type="file" name="thumbnail" class="form-control" id="thumbnail" >
                  </div>

                  <div class="form-group">
                    <label for="images">Multiple Image</label>
                    <input type="file" name="images[]"  multiple class="form-control" id="images" >
                  </div>

                  <div class="upload-box">
                    @foreach ($news->images as $image)
                        <div class="image-box">
                            <img src="{{ asset('uploads/news/' . $image) }}" width="150" alt="">
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