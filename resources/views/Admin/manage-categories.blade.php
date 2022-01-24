@extends('Admin.admin-master')
@section('body')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Categories</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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
                    <th>Category Name:</th>
                    <th>Category Description</th>
                    <th>Publication Status</th>
                    <th>Action</th>
                   </tr>
                   
                   @foreach($categories as $key => $category)
                   <tr>
                       <td>{{ $loop->iteration}}</td>
                       <td>{{$category->name }}</td>
                       <td>{{ $category->Description }}</td>
                       <td>{{$category->status}}</td>
                       <td>
                           <a href="{{ route('edit-category', [ 'id' => $category->id])}}"class="btn btn-success">Edite</a>
                           <a href="{{ route('edit-category', [ 'id' => $category->id])}}"class="btn btn-danger">Delete</a>
                       </td>
                   </tr>
                   @endforeach
               </table>
           </div>
       </div>
    </div>
</div> 

@endsection