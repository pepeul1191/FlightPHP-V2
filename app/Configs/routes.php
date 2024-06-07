<?php
use App\Controllers\HomeController;
use Flight;

Flight::route('GET /', [HomeController::class, 'index']);
Flight::route('/about', [HomeController::class, 'about']);

// Puedes agregar más rutas según sea necesario
Flight::route('/contact', function(){
  echo 'Contacto';
});