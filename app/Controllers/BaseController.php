<?php

namespace App\Controllers;
use Flight;

abstract class BaseController 
{
  protected $request;
  protected $response;
  protected $view;
  protected $env;

  public function __construct() 
  {
    // TODO?
    $this->request = Flight::request();
    $this->response = Flight::response();
    $this->view = Flight::view();
    $this->env = $_ENV;
  }

  protected function send() 
  {
    $this->response->send();
    Flight::halt();
  }

  protected function common_function() 
  {
    // TODO example?
  }
}