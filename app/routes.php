<?php
use Flight;

Flight::route('/', function(){
  echo 'Hola, mundo!';
});

Flight::route('/about', function(){
  echo 'Acerca de nosotros';
});

// Puedes agregar más rutas según sea necesario
Flight::route('/contact', function(){
  echo 'Contacto';
});