<?php

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
  define('DS', '\\'); // Usar barra invertida para Windows
} else {
  define('DS', '/'); // Usar barra inclinada para sistemas Unix-like (Linux, macOS, etc.)
}
define('BASE_PATH', dirname(__DIR__));

require '../vendor/autoload.php';
require '../configs/bootstrap.php';

Flight::start();