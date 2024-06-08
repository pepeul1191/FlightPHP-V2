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
    $method = Flight::request()->method;
    if ($method === 'GET') {
      Flight::view()->display('error.twig');
    } else {
      Flight::response()->status($number);
      Flight::response()->write('Error 404: Recurso no encontrado');
    }
  }
}