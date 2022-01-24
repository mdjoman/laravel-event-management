<?php

namespace App\Http\Controllers;

use App\Models\Cardmodel;
use App\Models\Category;
use App\Models\Massege;
use App\Models\Subimage;
use App\Models\User;
use Illuminate\Http\Request;

class modelcontroller extends Controller
{
    public function add()
    {
        return view('Admin.add-model', [
          'massages'  => Massege::all(),
          'categorys'  => Category::all(),
          'User'    =>User::first(),
        'customarmassege' => Massege::get(),
        ]);
    }
    public function manage()
    {

        return view('Admin.manage-model', [
          'massages'  => Massege::all(),
          'products' =>  Cardmodel::all(),

          'User'    =>User::first(),
          'customarmassege' => Massege::get(),

      
      ]);
    }
    public function view($id)
    {

        return view('Admin.view-model', ['product' =>  Cardmodel::find($id),
        'massages'  => Massege::all(),
        'subimages'  => Subimage::where('product_id', $id)->get(),
        'User'    =>User::first(),
        'customarmassege' => Massege::get(),
      ]);
    }


    public function create(Request $request)
    {
      $request->validate([
        'model_name' => 'required',
        'category_id' => 'required',
        'model_code' => 'required',
        'model_hight' => 'required',
        'model_Price' => 'required',
        'lDescription' => 'required',
        'Image' => 'required',
        'sImage' => 'required',
      ]);
      $image = $request->file('Image');
      $imagename = $image->getClientOriginalName();
      $directory = 'Product-image/';
      $image->move($directory, $imagename);
      $imageurl = $directory.$imagename;


      $product = new Cardmodel();
      $product->model_name = $request->model_name;
      $product->category_id = $request->category_id;
      $product->model_code = $request->model_code;
      $product->model_hight = $request->model_hight;
      $product->model_Price = $request->model_Price; 
      $product->lDescription = $request->lDescription;
      $product->image =$imageurl;
      $product->status = $request->status;
      $product->save();


      $images = $request->file('sImage');

     foreach($images as $image)
     {
      $imagename = $image->getClientOriginalName();
      $directory = 'Product-sub-image/';
      $image->move($directory, $imagename);
      $imageurl = $directory.$imagename;

       
        $subimage  = new Subimage();
        $subimage->Product_id =$product->id;  
        $subimage->subimage = $imageurl;
        $subimage->save();

     }
     return redirect()->back()->with('message', 'Product info create successfully');

    }
    public function edit($id)
  {
 
     return view('Admin.model-edit', [
      'product' =>  Cardmodel::find($id),
      'categories'  => Category::all(),
      'subimages'  => Subimage::where('product_id', $id)->get(),
      'massages'  => Massege::all(),
      'User'    =>User::first(),
      'customarmassege' => Massege::get(),
      
    ]);
  }
  public function update(Request $request)

  {
   
    $request->validate([
      'model_name' => 'required',
      'category_id' => 'required',
      'model_code' => 'required',
      'model_hight' => 'required',
      'model_Price' => 'required',
      'lDescription' => 'required',
      'Image' => 'required',
      'sImage' => 'required',
    ]);
      $product = Cardmodel::find($request->id);

      if($image = $request->file('Image'))
      
      {
        if(file_Exists($product->image))

        {
          unlink(($product->image));
        }

      $imagename = $image->getClientOriginalName();
      $directory = 'model-image/';
      $image->move($directory, $imagename);
      $imageurl = $directory.$imagename;

      }
      else
      {
        $imageurl  = $product->image;
      }
      $product->model_name = $request->model_name;
      $product->category_id = $request->category_id;
      $product->model_code = $request->model_code;
      $product->model_hight = $request->model_hight;
      $product->model_Price = $request->model_Price; 
      $product->lDescription = $request->lDescription;
      $product->image =$imageurl;
      $product->status = $request->status;
      $product->save();


      if($images = $request->file('sImage'))
      {
        $subimages = Subimage::where('product_id', $product->id)->get();
        foreach($subimages as $subimage)
        {
              if(file_Exists($subimage->subimage))
  
              {
                unlink(($subimage->subimage));
              }
                $subimage->delete();
        }
      
          foreach($images as $image)
        {
          $imagename = $image->getClientOriginalName();
          $directory = 'Product-sub-image/';
          $image->move($directory, $imagename);
          $imageurl = $directory.$imagename;
  
          
            $subimage  = new Subimage();
            $subimage->Product_id =$product->id;  
            $subimage->subimage = $imageurl;
            $subimage->save();
        }    
  
      }

    return redirect('/manage-models')->with('message', 'Model info Update successfully');
  }

public function delete($id)
{
  $product =  Cardmodel::find($id); 
  $product->delete();

  return redirect('/manage-models')->with('message', 'Model info Delete successfully');
}
}

