@extends('Admin.admin-master')
@section('body')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-edit fa-sm text-white-50"></i> Edit Model</a>
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
        <form class="" action="{{ route ('update-model')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
             <label class="col-sm-2 col-form-label" for="Categories Name"> Model Name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Categories Name"  name="model_name" value="{{ $product->model_name}}">
                <input type="hidden"value="{{ $product->id }}" name="id">
                
                <span class="text-danger">{{ $errors->has('model_name') ? $errors->first('model_name') : ''}}</span>
            
              </div>
         </div>
            <div class="form-group row">
             <label class="col-sm-2 col-form-label" for="Categories Name"> Category Name:</label>
              <div class="col-sm-10">
               <select class="form-control"  name="category_id" id="">
                   <option value="">{{$product->category->name }}</option>
                   @foreach($categories as $key => $category)
                   <option value="{{$category->id}}"{{ $product->category_id == $category->id ? 'selected' : '' }} >{{$category->name}}</option>

                     
                   @endforeach
                   <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : ''}}</span>
               </select>
           
              </div>
         </div>
       
          
         <div class="form-group row">
             <label class="col-sm-2 col-form-label" for="Categories Name">Model Code:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Categories Name"  name="model_code" value="{{ $product->model_code}}">
              
                <span class="text-danger">{{ $errors->has('model_code') ? $errors->first('model_code') : ''}}</span>
              </div>
         </div>
         <div class="form-group row">
             <label class="col-sm-2 col-form-label" for="Categories Name">Model Hight:</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="Categories Name"  name="model_hight" value="{{ $product->model_hight}}">
                <span class="text-danger">{{ $errors->has('model_hight') ? $errors->first('model_hight') : ''}}</span>

              </div>
         </div>
         <div class="form-group row">
             <label class="col-sm-2 col-form-label" for="Categories Name">Model Price:</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="Categories Name"  name="model_Price" value="{{ $product->model_Price}}">
                <span class="text-danger">{{ $errors->has('model_Price') ? $errors->first('model_Price') : ''}}</span>

              </div>
         </div>
        
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="Description"> Model Description:</label>
            <div class="col-sm-10">          
              <textarea   id="Categories Description"class="form-control" rows="4" name="lDescription"> {{ $product->lDescription}}</textarea>
              <span class="text-danger">{{ $errors->has('lDescription') ? $errors->first('lDescription') : ''}}</span>

            </div>
        </div>
      
        <div class="form-group row">
          <label class="col-sm-2 col-form-label " for="Description"> Model Image:</label>
            <div class="col-sm-10">
              <div class="form-check-inline ">
                  <label class="form-check-label "><input type="file" name="Image"accept="image/*"></label>
                  <img src="{{asset( $product->image)}}"width="220px" height="150px" alt="">
                  <span class="text-danger">{{ $errors->has('Image') ? $errors->first('Image') : ''}}</span>

              </div>
           </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label " for="Description">  Model Sub-Image:</label>
            <div class="col-sm-10">
              <div class="form-check-inline ">
                  <label class="form-check-label "><input type="file" name="sImage[]"multiple accept="image/*" ></label>
                                 
                  @foreach($subimages as $key => $subimage)
                       <img src="{{asset($subimage->subimage)}}"width="100px" height="100px" class="mr-1" alt="">
                  @endforeach
                  <span class="text-danger">{{ $errors->has('sImage') ? $errors->first('sImage') : ''}}</span>

              
              </div>
           </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label " for="Description"> Publication status:</label>
            <div class="col-sm-10">
              <div class="form-check-inline ">
              <label class="form-check-label "><input type="radio" name="status"{{ $product->status == 'Published' ? 'checked' : '' }} value=" Published"> Published</label>
              <span class="text-danger">{{ $errors->has('status') ? $errors->first('status') : ''}}</span>

            </div>
             <div class="form-check-inline ">
               <label class="form-check-label"> <input type="radio" name="status"{{ $product->status ==  'Unpublished' ? 'checked' : '' }}  value=" Unpublished" >  Unpublished</label>
               <span class="text-danger">{{ $errors->has('status') ? $errors->first('status') : ''}}</span>

             </div>
           </div>
        </div>
       
        <div class="form-group row ">        
          <div class=" col-sm-10">
            <button type="submit" class="btn btn-success">Update Model</button>
         </div>
        </div>
    </form>
    </div>
 </div> 
@endsection