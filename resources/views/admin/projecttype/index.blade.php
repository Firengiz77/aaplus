@extends('admin.layout.app')

@section('container')
    
  
@include('admin.layout.navbar')
@php
    $counter = 0;


@endphp


<div class="main-panel">        
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Project Type </h3>
       
        </div>
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">  Project Type </h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name </th>
                                        <th>Image</th>
                                        
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projecttypes as $projecttype)
                                        <tr>
                                            <td>{{ ++$counter }}</td>
                                            <td class="py-1">
                                                {!! json_decode($projecttype['name'])->{app()->getLocale()} !!}
                                            </td>
                                            <td> <img class="card-img-top" style="border-radius:50%" src="{{  (!empty($projecttype->image)? url('uploads/projecttype/'.$projecttype->image):url('uploads/projecttype/icon-admin.png')  )}}" width="50px" height="50px"></td>
                                         
                                        
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_{{ $projecttype->id }}">
                                                    <i class="mdi mdi-grease-pencil"></i>
                                                  </button>

                                                  <!-- Modal -->
<div class="modal fade" id="exampleModal_{{ $projecttype->id }}" role="dialog" aria-labelledby="exampleModalLabel_{{ $projecttype->id }}" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel_{{ $projecttype->id }}">Edit Project Type </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="lang">
                <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
                <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
                <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">Ru</a>
            </div>

              <form class="forms-sample" method="post" enctype="multipart/form-data" action="{{route('project_type.update',[ 'id'=> $projecttype->id ])}}" >
                  @csrf
                  
                  <div class="form-group translate">
                    <label for="name">Name</label>
                    <input type="hidden" name="name" value="{{ $projecttype->name }}">
                    <textarea required class="form-control" >{!! json_decode($projecttype['name'])->{app()->getLocale()} !!}</textarea>
                  </div>

                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" id="image" >
                  </div>

       
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary me-2">Save changes</button>
          
        </form>
        </div>
      </div>
    </div>
  </div>

                                                <a href="{{ route('delete-project_type',$projecttype->id) }}" class="delete-confirm">
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
                    <h4 class="card-title">Add Project Type</h4>
      
                    <div class="lang">
                      <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
                      <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
                      <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">Ru</a>
                  </div>
                    
                    <form class="forms-sample" method="post" action="{{route('project_type.add')}}" enctype="multipart/form-data" >
                        @csrf
                        
                        <div class="form-group translate">
                          <label for="name">Name</label>
                          <input type="hidden" name="name" value='{"az":"","en":"","ru":""}'>
                          <textarea required class="form-control" ></textarea>
                        </div>

                        <div class="form-group">
                          <label for="image">Image</label>
                          <input type="file" name="image" class="form-control" id="image" >
                        </div>
                  
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                 
                    </form>
                  </div>
                </div>
              </div>
        </div>
</div>
</div>

   


<script>

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script>





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