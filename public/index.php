<?php

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
  define('DS', '\\');
} else {
  define('DS', '/');
}
define('BASE_PATH', dirname(__DIR__));

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';
require '../configs/bootstrap.php';

Flight::start();