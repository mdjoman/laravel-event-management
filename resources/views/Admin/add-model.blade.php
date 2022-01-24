@extends('Admin.admin-master')
@section('body')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Model</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Model</a>
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
            
      <div class="container">
        <form class="" action="{{ route ('cerate-model')}}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="form-group row">
             <label class="col-sm-2 col-form-label" for="Categories Name"> Model Name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Categories Name" placeholder="Model Name...." name="model_name">
              <span class="text-danger">{{ $errors->has('model_name') ? $errors->first('model_name') : ''}}</span>
              </div>
         </div>
            <div class="form-group row">
             <label class="col-sm-2 col-form-label" for="Categories Name"> Category:</label>
              <div class="col-sm-10">
               <select class="form-control"  name="category_id" id="">
                   <option value="">----- Select Category Name-----</option>
                   @foreach($categorys as $key => $category)
                   <option value="{{$category->id}}">{{$category->name}}</option>

                   @endforeach
               </select>
              <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : ''}}</span>
              </div>
           </div>
         
        
         <div class="form-group row">
             <label class="col-sm-2 col-form-label" for="Categories Name">Model Code:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Categories Name" placeholder="'5620'" name="model_code">
              <span class="text-danger">{{ $errors->has('model_code') ? $errors->first('model_code') : ''}}</span>
              </div>
         </div>
         <div class="form-group row">
             <label class="col-sm-2 col-form-label" for="Categories Name">Model Hihgt:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Categories Name" placeholder="5.5" name="model_hight">
              <span class="text-danger">{{ $errors->has('model_hight') ? $errors->first('model_hight') : ''}}</span>
              </div>
         </div>
         <div class="form-group row">
             <label class="col-sm-2 col-form-label" for="Categories Name">Model Price:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Categories Name" placeholder="'5620'" name="model_Price">
              <span class="text-danger">{{ $errors->has('model_Price') ? $errors->first('model_Price') : ''}}</span>
              </div>
         </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="Description"> Model Description:</label>
            <div class="col-sm-10">          
              <textarea   id="Categories Description"class="form-control" rows="4" name="lDescription"> Description</textarea>
              <span class="text-danger">{{ $errors->has('lDescription') ? $errors->first('lDescription') : ''}}</span>
            </div>
        </div>
      
        <div class="form-group row">
          <label class="col-sm-2 col-form-label " for="Description"> Model Image:</label>
            <div class="col-sm-10">
              <div class="form-check-inline ">
                  <label class="form-check-label "><input type="file" name="Image" accept="image/*" value=" "></label>
                  <span class="text-danger">{{ $errors->has('Image') ? $errors->first('Image') : ''}}</span>
              </div>
           </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label " for="Description">  Model Sub-Image:</label>
            <div class="col-sm-10">
              <div class="form-check-inline ">
                  <label class="form-check-label "><input type="file" multiple accept="image/*" name="sImage[]" value=" "></label>
                  <span class="text-danger">{{ $errors->has('sImage') ? $errors->first('sImage') : ''}}</span>
              </div>
           </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label " for="Description"> Publication status:</label>
            <div class="col-sm-10">
              <div class="form-check-inline ">
                  <label class="form-check-label "><input type="radio" name="status" value=" Published"> Published</label>
                  <span class="text-danger">{{ $errors->has('status') ? $errors->first('status') : ''}}</span>
              </div>
             <div class="form-check-inline ">
               <label class="form-check-label"> <input type="radio" name="status"value=" Unpublished" >  Unpublished</label>
               <span class="text-danger">{{ $errors->has('status') ? $errors->first('status') : ''}}</span>
             </div>
           </div>
        </div>
       
        <div class="form-group row ">        
          <div class=" col-sm-10">
            <button type="submit" class="btn btn-success">Creat New Model</button>
         </div>
        </div>
    </form>
    </div>
 </div> 
@endsection