<?php

namespace Mango;

class Config {
    protected static $instance;

    protected $config;

    public static function init() {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    public function __construct() {
        return $this;
    }

    public function set($name, $value) {
        $this->config[$name] = $value;
    }

    public function get($name) {
        if (isset($this->config[$key])) {
            return $config[$key];
        }
    }
}

?>
