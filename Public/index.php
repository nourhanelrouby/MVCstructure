<?php

define("DS" ,DIRECTORY_SEPARATOR);
define("ROOT" ,dirname(__DIR__));
define("APP" , ROOT.DS.'App');
define("CONFIG",APP.DS.'Config');
define("CONTROLLES",APP.DS.'Controllers');
define("CORE" ,APP.DS.'Core');
define("MODELS" ,APP.DS.'Models');
define("VIEWS",APP.DS.'Views');

// Config
define("DOMAIN_NAME" ,"http://ruby.test/");
define("SERVER" , "localhost");
define("USERNAME" , "root");
define("DATABASE","userdata");
define("PASSWORD","");
define("TYPE","mysql");
define("CHARSET","utf8");
define("PORT","3306");
require '../vendor/autoload.php';

$obj = new MVC\Core\app();