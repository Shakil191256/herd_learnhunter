<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\formValidationRequest;

class formSubmitController extends Controller
{
      public function index(formValidationRequest $request){
          
       $request->validated();
       $name=$request->name;
       $phone_number=$request->phone_number;
       $email=$request->email;


       return view('formdetails',compact('name','phone_number','email')) ;
    }
}
