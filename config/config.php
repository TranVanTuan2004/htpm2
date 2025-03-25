<?php
$configDB = array();
$configDB["host"] 		= "host.docker.internal";
$configDB["database"]	= "computer_store";
$configDB["username"] 	= "root";
$configDB["password"] 	= "";
$configDB["port"] 	= "3307";
define("HOST", "host.docker.internal:3308");
define("DB_NAME", "computer_store");
define("DB_USER", "root");
define("DB_PASS", "");
define('ROOT', dirname(dirname(__FILE__) ) );
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
?>