<?php

namespace Mango;

class Router {
  protected static $instance = null;

  protected $path;

  protected $routes;

  protected $errorHandler;

  protected $routeFound = false;

  public static function init() {
    if (self::$_instance === null) {
      self::$_instance = new self;
    }
    return self::$_instance;
  }

  public function __construct() {
    $parsed_url = parse_url(Request::server('REQUEST_URI'));

    if(isset($parsed_url['path'])){
        $this->_path = trim($parsed_url['path'],'/');
    } else {
        $this->_path = '';
    }
  }

  public function add($route, $callback) {
    array_push($this->_routes, array(
      'route'     => $route,
      'callback'  => $callback,
    ));
    return $this;
  }

  public function remove($route, $callback) {
    $this->routes = array_diff($this->routes, array(
      'route'    => $route,
      'callback' => $callback,
    ));
    return $this;
  }

  public function addErrorHandler($callback) {
    array_push($this->errorHandler, $callback);
  }

  public function run() {
    foreach ($this->routes as $route) {
      if (preg_match($route['expression'], $this->path, $matches)) {
        array_shift($matches);
        call_user_func_array($route['callback'], $matches);
        $this->routeFound || $this->routeFound = true;
      }
    }
    return $this;
  }
}

?>