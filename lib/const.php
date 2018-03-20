<?php

define('ROOT', dirname(__DIR__).'/');

define('CONTROLLER',ROOT.'contriller/');
define('MODEL', ROOT.'model/');
define('VIEW', ROOT.'view/');

define('LIB', ROOT.'lib/');
define('VENDOR', ROOT.'vendor/');

define('PUBLIC_ASSETS', "http://{$_SERVER['HTTP_HOST']}/public/");
define('CSS', PUBLIC_ASSETS.'css/');
define('IMG', PUBLIC_ASSETS.'img/');
define('JS', PUBLIC_ASSETS.'js/');

?>