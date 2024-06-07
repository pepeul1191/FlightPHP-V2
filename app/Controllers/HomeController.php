<?php
namespace App\Controllers;

class HomeController {
  public function index() {
    echo 'Hola, mundo desde HomeController!';
  }

  public function about() {
    echo 'Acerca de nosotros desde HomeController!';
  }
}