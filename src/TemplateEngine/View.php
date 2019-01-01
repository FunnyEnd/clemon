<?php

namespace Clemon\TemplateEngine;

class View
{
  private const PATH = __DIR__ . "/Teamplates/";

  public static function render(string $string, array $data)
  {
    ob_start();
    extract($data, EXTR_OVERWRITE);
    require self::PATH . $string . ".php";
    return ob_get_clean();
  }
}