<?php

$config = array(
    "db" => array(
        "dbname" => "zaks-db1",
        "username" => "root",
        "password" => "",
        "host" => "localhost"
    ),
    "baseURL" => $_SERVER['DOCUMENT_ROOT'],
    "URL" => "/",
    "media" => "/media/"
);

ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

//include($config['baseURL'] . "/db.php");

?>