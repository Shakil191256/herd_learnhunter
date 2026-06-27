<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use Override;

class MyserviceFacades extends Facade{

 #[Override]
 protected static function getFacadeAccessor()
 {
    return 'myservice';
 }

}