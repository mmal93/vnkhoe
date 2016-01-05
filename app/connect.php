<?php
$local = simplexml_load_file(dirname(__FILE__).'/config.xml') or die ('config file is not found!');

define('DB_TYPE', $local->type);
define('DB_HOST', $local->host);
define('DB_USER', $local->username);
define('DB_PASS', $local->password);
define('DB_NAME', $local->db);
define('DB_SET', $local->charset);
?>