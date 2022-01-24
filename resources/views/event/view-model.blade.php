@extends('admin.master')
@section('body')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Product</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> View product</a>
    </div>
</div>  
<div class="row">
    <div class="col-sm-12 container">
       <div class="card card-body rounded-0">
    
           <div class="table-responsive ">
               <table  class="table table-bordered">
                
                <th>Product Info</th>
                <th>Product Data</th>
               
               </tr>            
               <tr> 
                  
                   <th>Product category</th>
                   <td>{{$product->category->name }}</td>
              </tr>
               <tr>
          
                    <th>Product brand</th>
                    <td>{{ $product->brand->name}}</td>
                </tr>
             
                
               <tr>
                    <th>Product Name</th>  
                   <td>{{ $product->Product_name}}</td>
                </tr>
               <tr>
                    <th>Product Price</th>
                    <td>{{ $product->Product_Price}}</td>
                </tr>
               <tr>
                    <th>Product Amount</th>
                    <td>{{ $product->Product_Amount}}</td>
               
           
                </tr>
               <tr>
                    <th>Product Short Description</th>
                    <td>{{ $product->sDescription}}</td>
                </tr>
               <tr>
                    <th>Product Long Description</th>
                    <td>{{ $product->lDescription}}</td>
                </tr>
               <tr>
                    <th>Product Code</th>
                    <td>{{ $product->Product_code}}</td>
                </tr>
               <tr> 
                   <th>Product Publication statust</th>
                   <td>{{ $product->status}}</td>
                </tr>
               <tr>  
                   
                   <th>Product image</th>
                   <td><img class="center" src="{{ asset($product->image)}}" width="200px" height="180px" alt=""></td> 

                </tr>
                <tr>
                     <th>Product Subimage</th>
                     <td>  @foreach($product->subimages as $key => $subimage)
                  <img src="{{asset($subimage->subimage)}}"width="150px" height="120px" alt="">
                  @endforeach</td>
            </tr>
          
              
               </table>
           </div>
       </div>
    </div>
</div> 


@endsection