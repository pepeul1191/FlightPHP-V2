<?php

use App\Controllers\HomeController;
use App\Controllers\ErrorController;

// routes
Flight::route('GET /', [HomeController::class, 'index']);
Flight::route('/about', [HomeController::class, 'about']);
Flight::route('GET /level/list', [HomeController::class, 'level_list']);
Flight::route('GET /error/access/@number', [ErrorController::class, 'not_found']);
// exceptions
Flight::map('notFound', function () { Flight::redirect('/error/access/404'); });

// Puedes agregar más rutas según sea necesario
Flight::route('/contact', function(){
  echo 'Contacto';
});