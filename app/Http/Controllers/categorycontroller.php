<?php

namespace App\Http\Controllers;

use App\Models\Cardmodel;
use App\Models\Category;
use App\Models\Massege;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    public function add()
   {
       return view('Admin.add-categories',[
         'massages'  => Massege::all(),

         'User'    =>User::first(),
        'customarmassege' => Massege::get(),
       ] );
   }
   public function manage()
   {
       return view('Admin.manage-categories', [
        'massages'  => Massege::all(),
        'categories' => Category::all(),
        'User'    =>User::first(),
        'customarmassege' => Massege::get(),
      ]);
   }
   public function create(Request $request)
   {
    $request->validate([
      'name' => 'required',
      'Description' => 'required',
      'status' => 'required',
      
    ]);
    $category = new Category();
    $category->name = $request->name;
    $category->Description = $request->Description;
    $category->status = $request->status;
    $category->save();

    return redirect()->back()->with('message', 'Category info create successfully');

   }
  public function edit($id)
  {
      $category = Category::find($id);

     return view('Admin.edit', [
      'massages'  => Massege::all(),
      'category' =>  $category,
      'User'    =>User::first(),
      'customarmassege' => Massege::get(),
    ]);
  }

  public function update(Request $request)
  {
   
   $category =  Category::find( $request->id);
   $category->name = $request->name;
   $category->Description = $request->Description;
   $category->status = $request->status;
   $category->save();

   return redirect('/manage-categories')->with('message', 'Category info Update successfully');

  }
  public function delete($id)
  {
    $model = Cardmodel::where('category_id',  $id)->first();

if( $model){

  return redirect('/manage-categories')->with('message', 'This category is already used in your products.To delete this category, first change the/those product category ');
}
else{
 
  $category =  Category::find($id); 
  $category->delete();

  return redirect('/manage-categories')->with('message', 'Category info Delete successfully'); 
}
  }
}
