@extends('admin.layout.app')

@section('container')
    
  
@include('admin.layout.navbar')
@php
    $counter = 0;


@endphp


<div class="main-panel">        
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Counter</h3>
       
        </div>
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Counter </h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title </th>
                                        <th>Number</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($counters as $counter2)
                                        <tr>
                                            <td>{{ ++$counter }}</td>
                                            <td class="py-1">
                                                {!! json_decode($counter2['title'])->{app()->getLocale()} !!}
                                            </td>
                                            <td>{{ $counter2->number }}</td>
        
                                            <td>
                                       
                                                <a href="{{ route('counter.edit',$counter2->id) }}" class="btn btn-primary">
                                                    <i class="mdi mdi-grease-pencil"></i>
                                                </a>
                                                <a href="{{ route('delete-counter',$counter2->id) }}" class="delete-confirm">
                                                    <button class="btn btn-danger"> <i class="mdi mdi-delete"></i></button>
                                                </a>
                                        
                                            
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Counter</h4>
      
                    <div class="lang">
                      <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
                      <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
                      <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">Ru</a>
                  </div>
                    
                    <form class="forms-sample" method="post" action="{{route('counter.add')}}" >
                        @csrf
                        
                        <div class="form-group translate">
                          <label for="Title">Title</label>
                          <input type="hidden" name="title" value='{"az":"","en":"","ru":""}'>
                          <textarea required class="form-control" ></textarea>
                        </div>
                      
                      <div class="form-group">
                          <label for="number">Number </label>
                          <input type="text" name="number" class="form-control" id="number" >
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});


    </script>
@endsection