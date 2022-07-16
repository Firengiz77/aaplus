@extends('admin.layout.app')

@section('container')
    
  
@include('admin.layout.navbar')
@php
    $counter = 0;


@endphp


<div class="main-panel">        
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Slider </h3>
            <a style="align-self:flex-end" href="{{route('slider.slider_add')}}" class="btn btn-success"> Add Slider </a>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Slider </h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Image </th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider)
                                        <tr>
                                            <td>{{ ++$counter }}</td>
                                            <td class="py-1">
                                                {!! json_decode($slider['title'])->{app()->getLocale()} !!}
                                            </td>
                                            <td> <img class="card-img-top" style="border-radius:50%" src="{{  (!empty($slider->image)? url('uploads/slider/'.$slider->image):url('uploads/slider/icon-admin.png')  )}}" width="50px" height="50px"></td>
                                         
                                            <td>
                                       
                                                <a href="{{ route('slider.edit',$slider->id) }}" class="btn btn-primary">
                                                    <i class="mdi mdi-grease-pencil"></i>
                                                </a>
                                                <a href="{{ route('delete-slider',$slider->id) }}" class="delete-confirm">
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
        </div>
</div>
</div>


 
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