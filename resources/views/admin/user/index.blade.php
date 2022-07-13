@extends('admin.layout.app')

@section('container')
    
  
@include('admin.layout.navbar')

@php
    $counter = 0;
   
$id=auth()->id();
$admin=App\Models\User::find($id);


@endphp

<div class="main-panel">        
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">All Admins</h3>
            <a style="align-self:flex-end" href="{{route('register')}}" class="btn btn-success"> Add Admin </a>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Admins</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ ++$counter }}</td>
                                            <td class="py-1">
                                                {{ $user->name }}
                                            </td>
                                            <td>{{ $user->email}}</td>
                                            <td>{{ $user->roles->first()?->name}}</td>
                                            <td>
                                         @if( $admin->roles->first()?->name == 'SuperAdmin')
                                                <a href="{{ route('add-role',$user->id) }}" class="btn btn-primary">
                                                    <i class="mdi mdi-plus"></i>
                                                </a>
                                                <a href="{{ route('delete-user',$user->id) }}" class="delete-confirm">
                                                    <button class="btn btn-danger"> <i class="mdi mdi-delete"></i></button>
                                                </a>
                                           @endif
                                            
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