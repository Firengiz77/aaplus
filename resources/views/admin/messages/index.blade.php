@extends('admin.layout.app')

@section('container')
    
  
@include('admin.layout.navbar')
@php
    $counter = 0;


@endphp


<div class="main-panel">        
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Messages</h3>
        
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Messages </h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name </th>
                                        <th>Surname</th>
                                        <th>Email</th>
                                        <th>Prefix</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $message)
                                        <tr>
                                            <td>{{ ++$counter }}</td>
                                            <td class="py-1">
                                                {{ $message->name }}
                                            </td>
                                            <td>{{ $message->surname }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->prefix }}</td>
                                            <td>{{ $message->phone }}</td>
                                            <td>{{ $message->msj }}</td>
                                          <td>
                                            <a href="{{ route('delete-message',$message->id) }}" class="delete-confirm">
                                               <button class="btn btn-danger"> <i class="mdi mdi-delete"></i></button>
                                            </a></td>
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


@endsection