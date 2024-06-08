<?php

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Flight;

Flight::register('view', 'Twig\Environment', [
  new FilesystemLoader(BASE_PATH . DS. 'views'),
], function($twig) {
  // Agregar extensiones o configuraciones adicionales aquí
  $twig->addGlobal('global_var', 'Valor Global');
});