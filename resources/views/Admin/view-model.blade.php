@extends('Admin.admin-master')
@section('body')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-View fa-sm text-white-50"></i> View Model</a>
        <a href="{{ route('delete-model', [ 'id' => $product->id])}}"class="btn btn-danger btn-md">Delete</a>

    </div>
</div>  
<div class="row">
    <div class="col-sm-12 container">
       <div class="card card-body rounded-0">
    
           <div class="table-responsive ">
               <table  class="table table-bordered">
                
                <th>Model Info</th>
                <th>Model Data</th>
               
                <tr>
                    <th>Model Name</th>  
                   <td>{{ $product->model_name}}</td>
                </tr>
               <tr>
               </tr>            
               <tr> 
                  
                   <th>Model category</th>
                   <td>{{$product->category->name }}</td>
              </tr>
              
             
               
                    <th>Model Price</th>
                    <td>{{ $product->model_Price}}</td>
                </tr>
               <tr>
                    <th>Model Hight</th>
                    <td>{{ $product->model_hight}}</td>
               
           
                </tr>
                <tr>
                    <th>Model Code</th>
                    <td>{{ $product->model_code}}</td>
                </tr>
               <tr>
                    <th>Model Description</th>
                    <td>{{ $product->lDescription}}</td>
                </tr>
              
               <tr> 
                   <th>Model Publication statust</th>
                   <td>{{ $product->status}}</td>
                </tr>
                <tr>  
                   
                   <th>Model image</th>
                   <td><img class="center" src="{{ asset($product->image)}}" width="200px" height="180px" alt=""></td> 

                </tr>
                <tr>
                     <th>Model Subimage</th>
                     <td>                     
                  @foreach($subimages as $key => $subimage)
                       <img src="{{asset($subimage->subimage)}}"width="150px" height="150px" class="mr-1" alt="">
                  @endforeach
                </td>
            </tr>
          
              
               </table>
           </div>
       </div>
    </div>
</div> 


@endsection