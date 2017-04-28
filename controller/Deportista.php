<?php

require_once('view/viewDeportista.php');

class Deportista{

  protected $viewDeportista;

  function __construct(){
    $this->viewDeportista = new viewDeportista();
  }

  function altaDepor(){
    $this->viewDeportista->mostrarFormAltaDepor();
  }

}




 ?>
