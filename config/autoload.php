<?php
class Autoloader
{
  public static function register()
  {
    spl_autoload_register(array(Autoloader::class, 'autoload'));
  }

  public static function autoload($class)
  {
    // Defina o namespace raiz
    $baseDir = __DIR__ . '/../src/';

    // Converta o namespace da classe para o caminho do arquivo
    $file = $baseDir . str_replace('\\', '/', $class) . '.php';
    // Verifique se o arquivo existe e o inclua
    if (file_exists($file)) {
      require $file;
    }
  }
}
