@extends('admin.layout.app')

@section('container')
    
  
@include('admin.layout.navbar')
@php
    $counter = 0;


@endphp


<div class="main-panel">        
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Project </h3>
            <a style="align-self:flex-end" href="{{route('project.project_add')}}" class="btn btn-success"> Add Project </a>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Project </h4>
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
                                    @foreach ($projects as $project)
                                        <tr>
                                            <td>{{ ++$counter }}</td>
                                            <td class="py-1">
                                                {!! json_decode($project['title'])->{app()->getLocale()} !!}
                                            </td>
                                            <td> <img class="card-img-top" style="border-radius:50%" src="{{  (!empty($project->image)? url('uploads/project/'.$project->image):url('uploads/project/icon-admin.png')  )}}" width="50px" height="50px"></td>
                                         
                                            <td>
                                       
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_{{ $project->id }}">
                                                    <i class="mdi mdi-grease-pencil"></i>
                                                  </button>

                                                                                                    <!-- Modal -->
<div class="modal fade" id="exampleModal_{{ $project->id }}" role="dialog" aria-labelledby="exampleModalLabel_{{ $project->id }}" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel_{{ $project->id }}">Edit Project </h5>
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


              <form class="forms-sample" method="post" action="{{route('project.update',[ 'id'=> $project->id ])}}" enctype="multipart/form-data">
                  @csrf

                  <div class="form-group ">
                    <div class="form-group">
                        <label for="project_type_id">Select Project Type :</label>
                        <select class="form-control"  name="project_type_id" id="project_type_id">
                          @foreach ($types as $type )
                              
                          <option value="{{ $type->id }}" @if($type->id == $project->project_type_id) selected @endif  >{!! json_decode($type['name'])->{app()->getLocale()} !!}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>


                  
                  <div class="form-group translate">
                    <label for="title">Title</label>
                    <input type="hidden" name="title" value="{{ $project->title }}">
                    <textarea required class="form-control" >{!! json_decode($project['title'])->{app()->getLocale()} !!}</textarea>
                  </div>

                  <div class="form-group translate">
                    <label for="desc">Description</label>
                    <input type="hidden" name="desc" value="{{ $project->desc }}">
                    <textarea required class="form-control" >{!! json_decode($project['desc'])->{app()->getLocale()} !!}</textarea>
                  </div>

                    <img class="card-img-top" style="border-radius:34%;width:8%;height:5%;margin-bottom:18px" src="{{  (!empty($project->image)? url('uploads/project/'.$project->image):url('uploads/project/icon-admin.png')  )}}" >
                     
                  <div class="form-group">
                    <label for="image">Thumbnails</label>
                    <input type="file" name="image" class="form-control" id="image" >
                  </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary me-2">Save changes</button>
          
        </form>
        </div>
      </div>
    </div>

</div>
</div>
</div>










                                                <a href="{{ route('delete-project',$project->id) }}" class="delete-confirm">
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