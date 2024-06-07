<?php

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Flight;
// Configurar Twig
Flight::register('view', 'Twig\Environment', [
  new FilesystemLoader(__DIR__ . '/../Views'),
], function($twig) {
  // Agregar extensiones o configuraciones adicionales aquí
  $twig->addGlobal('global_var', 'Valor Global');
});