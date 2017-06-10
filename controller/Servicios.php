<?php

require_once('view/viewServicios.php');
require_once('models/ServiciosModel.php');
require_once('models/CompetenciaModel.php');

/**
 *
 */
class Servicios{

  protected $viewServicios;
  protected $ServiciosModel;
  protected $CompetenciaModel;
  protected $DeportistaModel;

  function __construct(){
    $this->viewServicios = new viewServicios();
    $this->ServiciosModel = new ServiciosModel();
    $this->CompetenciaModel = new CompetenciaModel();
    $this->DeportistaModel = new DeportistaModel();
  }

  function servicios(){
    $this->viewServicios->showServicios();
  }

  function servicio1(){
      $competencias = $this->CompetenciaModel->getCompetencias();
      $this->viewServicios->showServicio1($competencias);
  }

  function servicio1lista(){
    $competencia= $_GET['idcompetencia'];
    $deportistas = $this->ServiciosModel->getDeportistas($competencia);
    $this->viewServicios->showListaServicio1($deportistas);
  }

  function servicio2(){
      $deportistas = $this->DeportistaModel->getDeportistas();
      $this->viewServicios->showServicio2($deportistas);
  }

  function servicio2lista(){
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    $deportista= $_GET['iddeportista'];
    $equipos = $this->ServiciosModel->getEquipos($deportista);
    if(!$equipos[0]==''){
      $this->viewServicios->showListaServicio2($equipos);
    }else{
      $equipos[0]['id']=999;
      $equipos[0]['nombre']='no estuvo en ningun equipo';
      $this->viewServicios->showListaServicio2($equipos);
    }

  }

  function servicio3(){
      $competencias = $this->CompetenciaModel->getCompetencias();
      $this->viewServicios->showServicio3($competencias);
  }

  function servicio3lista(){
    $competencia= $_GET['idcompetencia'];
    $clasificaciones = $this->ServiciosModel->getClasificaciones($competencia);
    $this->viewServicios->showListaServicio3($clasificaciones);
  }


}



 ?>
