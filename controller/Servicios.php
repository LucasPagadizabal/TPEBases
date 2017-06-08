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

  function __construct(){
    $this->viewServicios = new viewServicios();
    $this->ServiciosModel = new ServiciosModel();
    $this->CompetenciaModel = new CompetenciaModel();
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
