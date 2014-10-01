<?php
/*
*	index.php
*	
*	Este es el archivo principal, que maneja cada peticion del usuario
*	crea los objetos de configuracion, y crea el objeto core para
*	manejar todos los eventos requeridos por el usuario.
*
*/
ini_set('display_errors', '1');
session_start();
$site = "chessmatch";
$config = file_exists("config/config.$site.php") ? $site : "default";
include_once "config/config.$config.php";
$config = $config."_config";
$config = new $config();
include_once "core/core.php";
$core = new core($config);
?>