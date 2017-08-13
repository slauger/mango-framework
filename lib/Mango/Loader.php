<?php

namespace Mango;

Class Loader {
  protected $paths;

  public function __construct() {
    spl_autoload_register(array($this, 'loader'));
  }

  public function push() {

  }

  public function loader($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require_once $class . '.php';
  }
}

?>
