<?php

define('D_S', DIRECTORY_SEPARATOR);
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']) );

define('ROOTWEB', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));

require ROOT . 'vendor' . D_S . 'autoload.php'; 

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();