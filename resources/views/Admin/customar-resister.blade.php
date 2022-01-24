@extends('Admin.admin-master')
@section('body')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
       
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Edit Coustomar</a>
    </div>
</div>   

 <div class="card card-body mb-5">
    <div class="container">
      @if($message = Session::get('message'))
      <div class="alert alert-warning alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       {{ $message}}
      </div>
      @endif
         
      <div class="container" style="margin-bottom: 10rem;">
        <form class="" action="{{ route ('update-customar')}}" method="POST">
            @csrf
          <div class="form-group row">
             <label class="col-sm-2 col-form-label" for="Categories Name"> Coustomar Name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Categories Name" value="{{$customar->email }}" name="email">
                <input type="hidden"value="{{$customar->id }}" name="id">
             </div> 
         </div>

     
         <div class="form-group row">
             <label class="col-sm-2 col-form-label" for="Categories Name"> Coustomar Phone:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Categories Name" value="{{ $customar->phone }}" name="phone">
              
             </div> 
         </div>
         <div class="form-group row">
             <label class="col-sm-2 col-form-label" for="Categories Name"> Access Code:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Categories Name" value="" placeholder="access_code(8 digits)" name="access_code">
                <span class="text-danger">{{ $errors->has('access_code') ? $errors->first('access_code') : ''}}</span>
             </div> 
         </div>
        <div class="form-group row ">        
          <div class=" col-sm-10">
            <button type="submit" class="btn btn-success">Update Coustomar</button>
         </div>
        </div>
    </form>
    </div>
 </div> 
@endsection