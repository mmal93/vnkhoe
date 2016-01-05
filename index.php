<?php
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

header ('Content-type: text/html; charset=utf-8');
setlocale(LC_ALL, 'C.UTF-8', 'C');


require 'app/config.php';
require 'util/Auth.php';

// Load the mainApp!
$app = new mainApp();
//$app = new mainApp();
// Optional Path Settings
//$app->setControllerPath();
//$app->setModelPath();
//$app->setDefaultFile();
//$app->setErrorFile();

$app->init();

?>