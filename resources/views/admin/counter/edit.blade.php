@extends('admin.layout.app')

@section('container')
    
  
@include('admin.layout.navbar')



<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Counter</h4>

              <div class="lang">
                <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
                <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
                <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">Ru</a>
            </div>

              
              <form class="forms-sample" method="post" action="{{route('counter.update',[ 'id'=> $counter->id ])}}" >
                  @csrf
                  
                  <div class="form-group translate">
                    <label for="title">Title</label>
                    <input type="hidden" name="title" value="{{ $counter->title }}">
                    <textarea required class="form-control" >{!! json_decode($counter['title'])->{app()->getLocale()} !!}</textarea>
                  </div>

               
                <div class="form-group">
                    <label for="number">Linkedin Link</label>
                    <input type="text" name="number" class="form-control" id="number" placeholder="{{ $counter->number }}"  value="{{ $counter->number }}" >
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
 


@endsection