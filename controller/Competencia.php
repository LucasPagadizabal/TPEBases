<?php

require_once('view/viewCompetencia.php');
require_once('models/CompetenciaModel.php');

/**
 *
 */
class Competencia{
  protected $modelCompetencia;
  protected $viewCompetencia;

  function __construct(){
    $this->modelCompetencia = new CompetenciaModel();
    $this->viewCompetencia = new viewCompetencia();
  }

  function formAltaComp(){
    $disciplinas = $this->modelCompetencia->getDisciplinas();
    $this->viewCompetencia->mostrarFormAltaCompetencia($disciplinas);
  }

  function altaComp(){
    $comp = $_POST;
    $this->modelCompetencia->addCompetencia($comp);
    $this->formAltaComp();
  }

}

?>
