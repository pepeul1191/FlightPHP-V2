<?php

namespace App\Controllers;

use Flight;
use Model;
use \App\Helpers\HomeHelper;

class HomeController 
{
  public function index() 
  {
    Flight::view()->display('home.twig');
  }

  public function about() 
  {
    echo 'Acerca de nosotros desde HomeController! ' . HomeHelper::format_date('2024-06-07');
  }

  public function level_list()
  {
    // data
    $resp = [];
    $status = 200;
    // logic
    try {
      $rs = Model::factory('App\Models\Level', 'app')
        ->find_array();
      $resp = json_encode($rs);
    }catch (\Exception $e) {
      $status = 500;
      $resp = json_encode(['ups', $e->getMessage()]);
    }
    // resp
    http_response_code($status);
    echo $resp;
  }
}