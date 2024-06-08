<?php

use App\Controllers\HomeController;
use App\Controllers\ErrorController;

// routes
Flight::route('GET /', [HomeController::class, 'index']);
Flight::route('/about', [HomeController::class, 'about']);
Flight::route('GET /level/list', [HomeController::class, 'level_list']);
Flight::route('GET /error/access/@number', [ErrorController::class, 'not_found']);
// exceptions
Flight::map('notFound', function () { 
  $method = Flight::request()->method;
  if ($method === 'GET') {
    Flight::redirect('/error/access/404'); 
  } else {
    Flight::response()->write('Error 404: Recurso no encontrado');
  }
});

// Puedes agregar más rutas según sea necesario
Flight::route('/contact', function(){
  echo 'Contacto';
});