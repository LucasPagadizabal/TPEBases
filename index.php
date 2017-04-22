<?php

require_once("config/configApp.php");
require_once("controller/home.php");
require_once("controller/alta.php");

$home = new home();
$alta = new alta();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  // Home del sitio
  $home->iniciar("hola gato");
    die();
}

switch($_REQUEST[ConfigApp::$ACTION]){

  case ConfigApp::$ACTION_ALTA:
  $alta->iniciar();
  break;

  case ConfigApp::$ACTION_HOME:
  $home->home();
  break;


}

 ?>
