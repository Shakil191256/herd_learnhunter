<?php

namespace App\Http\Controllers;

use App\services\MyLogger;
use Illuminate\Http\Request;
use App\services\MyCustomService;
use App\services\MyService;
class aboutController extends Controller
{
    public function index(){
          
        MyService::hello();
        return "ok";
    
    }
}
