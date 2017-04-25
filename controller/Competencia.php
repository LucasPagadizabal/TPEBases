<?php

require_once('view/viewCompetencia.php');
/**
 *
 */
class Competencia{

  protected $viewCompetencia;

  function __construct(){
    $this->viewCompetencia = new viewCompetencia();
  }

  function altaComp(){
    $this->viewCompetencia->mostrarFormAltaCompetencia();
  }

}

?>
