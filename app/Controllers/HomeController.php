<?php

namespace App\Controllers;

use \App\Controllers\BaseController;
use \App\Helpers\HomeHelper;
use \App\Middlewares\IsLoggedMiddleware;
use Flight;
use Model;

class HomeController extends BaseController 
{
  public function __construct() {
    parent::__construct();
  }

  public function index() 
  {
    //IsLoggedMiddleware::handle($this->request, $this->response);
    $this->view->display('home.twig');
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
    //http_response_code($status);
    //echo $resp;
    $this->response->status($status);
    $this->response->write($resp);
    $this->send();
  }
}