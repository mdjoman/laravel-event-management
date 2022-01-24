<?php

namespace App\Http\Controllers;

use App\Models\Cardmodel;
use App\Models\Category;

use App\Models\Seating;
use App\Models\Sliderimage;
use App\Models\Subimage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class fontendcontroller extends Controller
{
    public function home()
       
    {
        $setting = Seating::all();
        return view('event.home',
        ['products' => Cardmodel::orderBy('id', 'desc')->get(),
        'categories' => Category::where('status','Published', )->get(),
        'setting'     =>  $setting,
        'siliders'    => Sliderimage::get(),
      
    
    ]);
    }
    
    public function contuct()
    {
        return view('event.contuct-us',[
            'setting' => Seating::get(),
        'categories' => Category::where('status','Published', )->get()
    
    ]);
    }
    public function policy()
    {
        return view('event.policy',[
            'setting' => Seating::all(),
        'categories' => Category::where('status','Published', )->get()
    
    ]);
    }
    public function signup()
    {
        return view('event.resister' ,  [
            'setting' => Seating::all(),
            'categories' => Category::where('status','Published', )->get()
    ]);
    }
  
    public function about()
    {
        return view('event.about',   [
          'setting' => Seating::all(),
            'categories' => Category::where('status','Published', )->get()
        
        ]);
    }
    public function model()
    {
        return view('event.model',
        ['products' => Cardmodel::orderBy('id', 'desc')->get(),
        'setting' => Seating::all(),
        'categories' => Category::where('status','Published', )->get()
        ]);
    }

    public function modeldetails($id)
    {
        if($customar_id =  Session::get('customar_id')){
            $product = Cardmodel::find($id);
            return view('event.model-details', [
                'setting' => Seating::all(),
                'categories' => Category::where('status','Published', )->get(),
                'product' =>$product,
                'subimages'  => Subimage::where('product_id', $id)->get(),
                'settingdetails' => Seating::first(),
    
            ]);

        }
        else{
            return redirect('/signup')->with('message', 'To view the model details you first need to register or login');
        
        }

     
    }
    
    
}


