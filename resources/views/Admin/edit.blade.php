@extends('Admin.admin-master')
@section('body')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Edit Categories</a>
        <a href="{{ route('delete-category', [ 'id' => $category->id])}}"class="btn btn-danger">Delete</a>
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
        <form class="" action="{{ route ('update-category')}}" method="POST">
            @csrf
          <div class="form-group row">
             <label class="col-sm-2 col-form-label" for="Categories Name"> Categories Name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Categories Name" value="{{ $category->name }}" name="name">
                <input type="hidden"value="{{ $category->id }}" name="id">
             </div> 
         </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="Description"> Description:</label>
            <div class="col-sm-10">          
              <textarea   id="Categories Description"class="form-control" rows="2" name="Description"> {{ $category->Description}}</textarea>
           </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label " for="Description"> Publication status:</label>
            <div class="col-sm-10">
              <div class="form-check-inline ">
                  <label class="form-check-label "><input type="radio" name="status"{{ $category->status == 'Published' ? 'checked' : '' }} value=" Published"> Published</label>
              </div>
             <div class="form-check-inline ">
               <label class="form-check-label"> <input type="radio" name="status"{{ $category->status ==  'Unpublished' ? 'checked' : '' }}  value=" Unpublished" >  Unpublished</label>
             </div>
           </div>
        </div>
        <div class="form-group row ">        
          <div class=" col-sm-10">
            <button type="submit" class="btn btn-success">Update Categories</button>
         </div>
        </div>
    </form>
    </div>
 </div> 
@endsection