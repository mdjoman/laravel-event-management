@extends('Admin.admin-master')
@section('body')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
       
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-nanage fa-sm text-white-50"></i> Manage Product</a>
    </div>
</div>  
<div class="row">
    <div class="col-sm-12 container">
       <div class="card card-body rounded-0">
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
                    <th>Model image</th>
                    <th>Model Name</th>
                    <th>Model category</th>
                    <th>Model Code</th>
                    <th>Model status</th>
                    <th>Action</th>
                   </tr>
                    
                   @foreach($products as $key => $product)
                  
                   <tr>
                       <td>{{ $loop->iteration}}</td>
                       <td><img class="center" src="{{ $product->image}}" width="70px" height="70px" alt=""></td> 
                       <td>{{$product->model_name }}</td>
                       <td>{{$product->category->name }}</td>
                       <td>{{$product->model_code}}</td>
                       <td>{{ $product->status}}</td>
                     
                 

                       <td>
                           <a href="{{ route('view-model', [ 'id' => $product->id])}}"class="btn btn-warning btn-sm">View</a>
                           <a href="{{ route('edit-model', [ 'id' => $product->id])}}"class="btn btn-success btn-sm">Edite</a>
                           <a href="{{ route('view-model', [ 'id' => $product->id])}}"class="btn btn-danger btn-sm">Delete</a>
                          
                       </td>
                   </tr>
              
                   @endforeach
               </table>
           </div>
       </div>
    </div>
</div> 


@endsection