<?php
namespace App\Controllers;
use Flight;

class HomeController {
  public function index() {
    Flight::view()->display('home.twig');
  }

  public function about() {
    echo 'Acerca de nosotros desde HomeController!';
  }
}