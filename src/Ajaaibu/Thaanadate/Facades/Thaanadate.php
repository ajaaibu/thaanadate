<?php
namespace Ajaaibu\Thaanadate\Facades;

use Illuminate\Support\Facades\Facade;

class Thaanadate extends Facade{
  
  protected static function getFacadeAccessor(){
    return 'thaanadate';
  }
}
