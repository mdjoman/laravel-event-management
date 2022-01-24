@extends('Admin.admin-master')
@section('body')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa- fa-sm text-white-50"></i>Manage Coustomar</a>
    </div>
</div>  
<div class="row">
    <div class="col-sm-12 container">
       <div class="card card-body rounded-0">
       <div class="container">
      @if($message = Session::get('message'))
      <div class="alert alert-warning alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       {{ $message}}
      </div>
      @endif
           <div class="table-responsive ">
               <table  class="table table-bordered">
                   <tr>
                    <th>SL.NO</th>
                    <th>Coustomar Name</th>
                
                    <th>Coustomar Phone</th>
                    <th>Action</th>
                  
               
                   </tr>
                   
                   @foreach($customars as $key => $customar)
                   <tr>
                       <td>{{ $loop->iteration}}</td>
                       <td>{{$customar->email}}</td>
                    
                       <td>{{$customar->phone}}</td>
                      
                       <td>
                           <a href="{{ route('customar', [ 'id' => $customar->id])}}"class="btn btn-success">Edite</a>
                           <a href="{{ route('customar-delete', [ 'id' => $customar->id])}}"class="btn btn-danger">Delete</a>
                       </td> 
                   </tr>
                   @endforeach
               </table>
           </div>
       </div>
    </div>
</div> 

@endsection