<?php

namespace Mango;

Class Application {
  protected $router;

  public function __construct($config) {
    $this->config = new Config($config);
  }

  public function run() {
    $this->router = Router::init();
    $this->config = Config::init();
  }
}

?>
