<?php

use App\Controllers\HomeController;
use Flight;

Flight::route('GET /', [HomeController::class, 'index']);
Flight::route('/about', [HomeController::class, 'about']);
Flight::route('GET /level/list', [HomeController::class, 'level_list']);

// Puedes agregar más rutas según sea necesario
Flight::route('/contact', function(){
  echo 'Contacto';
});