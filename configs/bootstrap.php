<?php

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
  define('DS', '\\');
} else {
  define('DS', '/');
}
define('BASE_PATH', dirname(__DIR__));
date_default_timezone_set('America/Lima');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dotenv = \Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

require_once 'views.php';
require_once 'routes.php';
require_once 'database.php';
