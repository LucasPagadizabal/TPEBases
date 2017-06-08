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
    echo json_encode($_GET);
    $competencia= $_GET['idcompetencia'];
    $deportistas = $this->ServiciosModel->getDeportistas($competencia);
    $this->viewServicios->showListaServicio1($deportistas);
  }

}



 ?>
