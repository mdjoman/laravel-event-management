<?php

namespace App\Http\Controllers;

use App\Models\Massege;
use App\Models\Seating;
use App\Models\Sliderimage;
use App\Models\Subimage;
use App\Models\User;
use Illuminate\Http\Request;

class seatingcontroller extends Controller
{
    public function siteseating(){
        return view('Admin.site-seating',    [
          'setting' => Seating::all(),
          'massages'  => Massege::all(),
          'siliders'    => Sliderimage::get(),
          'User'    =>User::first(),
          'customarmassege' => Massege::get(),

      ]);
    }
    public function sitesettingup(Request $request)
    {
     
    
      $setting = Seating::find($request->id);

      if($image = $request->file('logo'))
      
      {
        if(file_Exists($setting->logo))

        {
          unlink(($setting->logo));
        }

      $imagename = $image->getClientOriginalName();
      $directory = 'logo/';
      $image->move($directory, $imagename);
      $imageurl = $directory.$imagename;

      }
      else
      {
        $imageurl  = $setting->logo;
      }
      $setting->Email = $request->Email;
      $setting->whatsapp = $request->whatsapp;
      $setting->instagram = $request->instagram;
      $setting->facebook = $request->facebook;
      $setting->twitter = $request->twitter; 
      $setting->Site_name = $request->Site_name;
      $setting->siteDescription = $request->siteDescription; 
      $setting->About = $request->About;
      $setting->Privacy = $request->Privacy;
      $setting->logo =$imageurl;
      $setting->phone = $request->phone;
      $setting->save();
      
      if($images = $request->file('sliderImage'))
      {
        $siliders = Sliderimage::get();
        foreach($siliders as $silider)
        {
              if(file_Exists($silider->sliderImage))
  
              {
                unlink(($silider->sliderImage));
              }
                $silider->delete();
        }
      
          foreach($images as $image)
        {
          $imagename = $image->getClientOriginalName();
          $directory = 'sliderImage/';
          $image->move($directory, $imagename);
          $imageurl = $directory.$imagename;
  
          
            $silider  = new Sliderimage(); 
            $silider->sliderImage = $imageurl;
            $silider->save();
        }    
  
      }
     return redirect()->back()->with('message', 'setting info Update successfully');

    }

}
