<?php

require_once("config/configApp.php");
require_once("controller/home.php");
require_once("controller/Competencia.php");
require_once("controller/Deportista.php");
require_once("controller/Inscripcion.php");

$home = new home();
$competencia = new Competencia();
$deportista = new Deportista();
$inscripcion = new Inscripcion();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  // Home del sitio
  $home->iniciar();
    die();
}

switch($_REQUEST[ConfigApp::$ACTION]){

  case ConfigApp::$ACTION_HOME:
  $home->home();
  break;

  case ConfigApp::$ACTION_ALTA_COMP:
  $competencia->altaComp();
  break;

  case ConfigApp::$ACTION_DEPORTISTA:
  $deportista->formDeportista();
  break;

  case ConfigApp::$ACTION_INSCRIPCION:
  $inscripcion->inscripcion();
  break;

  case ConfigApp::$ACTION_AGREGAR_DEPORTISTA:
  $deportista->altaDepor();
  break;


}

 ?>
