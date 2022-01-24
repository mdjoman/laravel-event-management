<?php

namespace App\Http\Controllers;

use App\Models\Cardmodel;
use App\Models\Category;
use App\Models\Customar;
use App\Models\Massege;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class customarcontroller extends Controller
{


    public function customarupdate(){
        return view('event.customar-resister',[
            'massages'  => Massege::all(), 
        ]);
    }
    public function resister(Request $request){
        $request->validate([
            'email' => 'required',
            'phone' => 'required',
            
          ]);
        $customar = new Customar();
        $customar->email = $request->email;
        $customar->access_code = bcrypt($request->access_code);
        $customar->phone = $request->phone;
      
        $customar->save();

       


        return redirect()->back()->with('message', ' Thank you for applying for a premium account.We will contact you as soon as possible and Your access_code will be notified');
        
    }
    public function manage()
   {
       return view('Admin.coustomar', [
        'massages'  => Massege::all(),
        'customars' => Customar::all(),
        'User'    =>User::first(),
        'customarmassege' => Massege::get(),
    ]);
        
   }

   public function edit($id)
   { 
       $customar = Customar::find($id);
       return view('Admin.customar-resister', [
        'massages'  => Massege::all(),
        'customar' => $customar,
        'User'    =>User::first(),
        'customarmassege' => Massege::get(),
    ]);
   }
    public function updatecustomar(Request $request)
  {
    $request->validate([
        'email' => 'required',
        'access_code' => 'required',
        'phone' => 'required',
        
      ]);
   $customar =  Customar::find( $request->id);
   $customar->email = $request->email;
   $customar->phone = $request->phone;
   $customar->access_code = bcrypt($request->access_code);
   $customar->save();

   return redirect()->back()->with('message', 'Resister info Update successfully');

  }
 

public function logout(Request $request){
    Session::forget('customar_id');
    Session::forget('customar_email');

    return redirect('/')->with('message', 'Logout  successfully');
}
public function costomarlogin(Request $request){
  
    $customar = Customar::where('phone', $request->phone)->first();

    if($customar){
       
        if (password_verify( $request->access_code, $customar->access_code )) {
            Session::put('customar_id', $customar->id);
            return redirect('/');
            
        } 
        else
         {
            return redirect()->back()->with('message', ' You are provide worng access_code');
         }
    }
    else
    {
        return redirect()->back()->with('message', ' Your phone number is worng');
    }
  
    Session::put('customar_id', $customar->id);
}

public function delete($id)
{
  $customar =  Customar::find($id); 
  $customar->delete();

  return redirect()->back()->with('message', 'customar info Delete successfully');
}
}
