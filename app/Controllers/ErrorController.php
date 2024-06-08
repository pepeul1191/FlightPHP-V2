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
    Flight::response()->status(404);
    Flight::response()->write('Internal Server Error');
  }
}