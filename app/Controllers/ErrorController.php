<?php

namespace App\Controllers;

use \App\Controllers\BaseController;
use Flight;

class ErrorController extends BaseController 
{
  public function __construct() {
    parent::__construct();
  }

  public function not_found($number){
    Flight::view()->display('error.twig');
  }
}