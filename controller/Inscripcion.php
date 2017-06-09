<?php

require_once('view/viewInscripcion.php');
require_once('models/CompetenciaModel.php');
require_once('models/DeportistaModel.php');

/**
 *
 */
class Inscripcion{

  protected $viewInscripcion;
  protected $DeportistasModel;
  protected $CompetenciaModel;

  function __construct(){
    $this->DeportistaModel = new DeportistaModel();
    $this->CompetenciaModel = new CompetenciaModel();
    $this->viewInscripcion = new viewInscripcion();
  }

  function inscripcion(){
    $competencias = $this->CompetenciaModel->getCompetencias();
    $deportistas = $this->DeportistaModel->getDeportistas();
    $this->viewInscripcion->showFormInscripcion($competencias,$deportistas);
  }

  function inscribirDeportista(){
    $datos=$_POST;
    $men = $inscripcion = $this->CompetenciaModel->inscribirDeportista($datos);
    //$this->viewInscripcion->showFormInscripcion($men);
  }

}



 ?>
