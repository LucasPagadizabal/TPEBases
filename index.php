<?php

require_once("config/configApp.php");
require_once("controller/home.php");
require_once("controller/Competencia.php");
require_once("controller/Deportista.php");
require_once("controller/Inscripcion.php");
require_once("controller/Servicios.php");

$home = new home();
$competencia = new Competencia();
$deportista = new Deportista();
$inscripcion = new Inscripcion();
$servicios = new Servicios();

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
  $competencia->formAltaComp();
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

  case ConfigApp::$ACTION_AGREGAR_COMPETENCIA:
  $competencia->altaComp();
  break;

  case ConfigApp::$ACTION_SERVICIOS:
  $servicios->servicios();
  break;

  case ConfigApp::$ACTION_SERVICIO1:
  $servicios->servicio1();
  break;

  case ConfigApp::$ACTION_SERVICIO1LISTA:
  $servicios->servicio1lista();
  break;

  case ConfigApp::$ACTION_SERVICIO2:
  $servicios->servicio2();
  break;

  case ConfigApp::$ACTION_SERVICIO3:
  $servicios->servicio3();
  break;

  case ConfigApp::$ACTION_SERVICIO3LISTA:
  $servicios->servicio3lista();
  break;

  case ConfigApp::$ACTION_SERVICIO4:
  $servicios->servicio4();
  break;

}

 ?>
