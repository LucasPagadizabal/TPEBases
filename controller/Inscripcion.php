<?php

require_once('view/viewInscripcion.php');

/**
 *
 */
class Inscripcion{

  protected $viewInscripcion;

  function __construct(){
    $this->viewInscripcion = new viewInscripcion();
  }

  function inscripcion(){
    $this->viewInscripcion->showFormInscripcion();
  }
}



 ?>
