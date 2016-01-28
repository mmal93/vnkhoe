<?php
//LOAD CONFIG
/**
 * define shorthand directory separator constant
 */
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
// Always provide a TRAILING SLASH (/) AFTER A PATH
//$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
define('BASE_URL', $url.'/');
define('MEDIA_URL', BASE_URL.'media/');

//define('BASE_DIR', rtrim(str_replace('\\', '/', dirname(__FILE__)), 'app'));
define('BASE_DIR', rtrim(dirname(__FILE__), 'app'));
define('LIBS', BASE_DIR.'libs'.DS);
define ('APP_URL', BASE_DIR.'app');
define('USER_TEMPLATE_DIR', BASE_DIR.'templates'.DS.'users'.DS.'vnkhoe'.DS);
define('USER_TEMPLATE_URL', BASE_URL.'templates/users/vnkhoe/');
define('ADMIN_TEMPLATE', BASE_DIR.'templates'.DS.'admins'.DS.'vnkhoe'.DS);

define('SHOW_CLASS', 'false');

//require LIBS.'smarty/Smarty.class.php';
require BASE_DIR.'app'.DS.'connect.php';
require BASE_DIR.'models'.DS.'xml_data.php';

require LIBS .'smarty/Smarty.class.php';


// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only
define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');
?>