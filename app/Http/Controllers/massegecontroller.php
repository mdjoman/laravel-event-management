<?php

namespace App\Http\Controllers;

use App\Models\Massege;
use App\Models\User;
use Illuminate\Http\Request;

class massegecontroller extends Controller
{
    public function massage(Request $request){
      
        $request->validate([
            'email' => 'required',
            'message' => 'required',
            'name' => 'required',
            
          ]);
        $massege = new Massege();
        $massege->name = $request->name;
        $massege->email = $request->email;
        $massege->subject = $request->subject;
        $massege->message = $request->message;
        $massege->save();

        


        return redirect()->back()->with('message', ' Thanks for sending us a message. We will get back to you soon');
        
    }
    public function showmassege($id){
       
        $contuctmasseg = Massege::find($id);

       return view('Admin.customarmasseg',[
           
           'masseges' =>  Massege::orderBY('id', 'desc')->get(),
           'User'    => User::first(),
           'customarmassege' => Massege::get(),
           'massege'    => Massege::find($id)->first(),
           
       ]);


    }
    public function deletemassege($id)
    {

        $contuctmasseg = Massege::find($id);
        $contuctmasseg->delete();

        return redirect('/dashboard');
    }

}
