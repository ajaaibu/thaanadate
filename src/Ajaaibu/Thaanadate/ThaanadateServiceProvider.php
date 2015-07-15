<?php namespace Ajaaibu\Thaanadate;

use Illuminate\Support\ServiceProvider;
use Ajaaibu\Thaanadate\ThaanaDate;

class ThaanadateServiceProvider extends ServiceProvider{

  public function register(){
    $this->app->singleton('thaanadate', function ($app) {
      return new ThaanaDate;
    });
  }

  public function provides(){
    return ['thaanadate'];
  }
}
?>
