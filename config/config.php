<?php
$configDB = array();
$configDB["host"] = "host.docker.internal";
$configDB["database"] = "computer_store";
$configDB["username"] = "root";
$configDB["password"] = "";
$configDB["port"] = "3307";
define("HOST", "mysql-db:3306");
define("DB_NAME", "computer_store");
define("DB_USER", "root");
define("DB_PASS", "123456");
define('ROOT', dirname(dirname(__FILE__)));
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
?>