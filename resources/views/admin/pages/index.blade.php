@extends('admin.layout.app')

@section('container')
@php
$id=auth()->guard('admin')->id();
$admin=App\Models\User::find($id);

@endphp
<style>
  body{
    color:black;
  }
</style>


   @include('admin.layout.navbar')
  
   <div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"> Dashboard  </h4>

              <div style="margin-bottom:20px;width:50px;height:auto">
                <label >Image</label>
                <img class="card-img-top" style="border-radius:50%" src="{{  (!empty($admin->image)? url('upload/admin_images/'.$admin->image):url('upload/admin_images/icon-admin.png')  )}}" width="50px" height="50px">
              </div>

              <form class="forms-sample" method="post" action="{{route('admin.edit.all')}}"  enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                  </div>

                <div class="form-group">
                  <label for="name">Username</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="{{$admin->name}}" value="{{$admin->name}}" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="{{$admin->email}}" value="{{$admin->email}}">
                </div>
              
                <button type="submit" class="btn btn-primary me-2">Submit</button>
           
              </form>


            </div>

          <div class="card-body" style="border:1px solid rgba(128, 128, 128, 0.693);border-radius:6px;margin:5px;padding:5px">
            <h4 class="card-title"> Change Password  </h4> 
            <form class="forms-sample" method="post" action="{{route('admin.edit.password')}}">
              @csrf
              <div class="form-group">
                <label for="oldpassword">Current Password</label>
                <input type="password" name="oldpassword" class="form-control" id="oldpassword">
              </div>
              <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" name="password" class="form-control" id="password">
              </div>
              <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="confirm_password">
              </div>
              <button type="submit" class="btn btn-primary">Change Password </button>


            </form>
          </div>
          </div>
        </div>

    </div>
</div>
</div>



@endsection