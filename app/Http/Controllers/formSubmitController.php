<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formSubmitController extends Controller
{
      public function index(Request $request){
          
       $name=$request->name;
       $phone_number=$request->phone_number;
       $email=$request->email;
       return view('formDetails',compact('name','phone_number','email'));
    
    }
}
