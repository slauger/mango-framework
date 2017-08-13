<?php

namespace Mango;

class Request {
  protected $instance;

  public static function method() {
    return $_SERVER['REQUEST_METHOD'];
  }

  public static function get($key) {
    if (isset($_GET[$key])) {
      return $_GET[$key];
    }
    return null;
  }

  public static function post() {
    if (isset($_POST[$key])) {
      return $_POST[$key];
    }
    return null;
  }

  public static function request() {
    if (isset($_REQUEST[$key])) {
      return $_REQUEST[$key];
    }
    return null;
  }

  public static function server() {
    if (isset($_SERVER[$key])) {
      return $_SERVER[$key];
    }
    return null;
  }

  public static function session() {
    if (isset($_SESSION[$key])) {
      return $_SESSION[$key];
    }
    return null;
  }

  public static function cookie() {
    if (isset($_COOKIE[$key])) {
      return $_COOKIE[$key];
    }
    return null;
  }

  public static function files() {
    if (isset($_FILES[$key])) {
      return $_FILES[$key];
    }
    return null;
  }
}

?>
