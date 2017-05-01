<?php

require_once('view/viewServicios.php');

/**
 *
 */
class Servicios{

  protected $viewServicios;

  function __construct(){
    $this->viewServicios = new viewServicios();
  }

  function servicios(){
    $this->viewServicios->showServicios();
  }
}



 ?>
