<?php

namespace App\Helpers;

class HomeHelper 
{
  public static function format_date($date) 
  {
    return date('Y-m-d', strtotime($date));
  }
}