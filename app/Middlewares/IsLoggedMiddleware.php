<?php

namespace App\Middlewares;

class IsLoggedMiddleware 
{
  public static function handle($request, $response) 
  {
    $response->write('middelware');
    $response->send();
    exit();
  }

  // Función para verificar si el usuario está autenticado (ejemplo)
  private static function usuario_autenticado() 
  {
    // Aquí deberías tener la lógica para verificar si el usuario está autenticado
    // Puedes usar sesiones, tokens, cookies u otros métodos de autenticación según tu aplicación
    return isset($_SESSION['usuario_id']);
  }
}