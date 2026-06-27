<?php
namespace App\services;

use Illuminate\Support\Facades\log;
class MyService{

public static function hello(){
    log::info("this is myservice log");
return "hello from myservice";

}



}




