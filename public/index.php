<?php
/**
 * Mango Bootstrap File
 */

defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));
defined('LIBARY_PATH') || define('LIBARY_PATH', realpath(dirname(__FILE__) . '/../lib'));
defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

$include_path = array(
  LIBARY_PATH
);

set_include_path(implode(PATH_SEPARATOR, array_merge(
  $include_path, explode(PATH_SEPARATOR, get_include_path())
)));

require_once 'Mango/Loader.php';
$loader = new Mango\Loader();

$application = new Mango\Application(
  APPLICATION_PATH . '/configs/environments/' . APPLICATION_ENV . '.php'
);

$application->run();

?>