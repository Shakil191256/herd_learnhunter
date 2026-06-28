<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formSubmitController extends Controller
{
      public function index(Request $request){
          
       $request->validate([
          'name' => 'required|string|min:3|max:50',
        'phone_number' => 'required|string|min:11|max:11',
        'email' => 'required|string|email:rfc,dns',
          

          
       ]);
       $name=$request->name;
       $phone_number=$request->phone_number;
       $email=$request->email;


       return view('formdetails',compact('name','phone_number','email')) ;
    }
}
