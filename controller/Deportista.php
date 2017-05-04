<?php

require_once('view/viewDeportista.php');
require_once('models/DeportistaModel.php');

class Deportista{

  protected $viewDeportista;
  protected $modelDeportista;

  function __construct(){
    $this->viewDeportista = new viewDeportista();
    $this->modelDeportista = new DeportistaModel();
  }

  function formDeportista(){
    $this->viewDeportista->mostrarFormAltaDepor();
  }
  function altaDepor(){
    $deportista = $_POST;
    $this->modelDeportista->addDeportista($deportista);

  }

}




 ?>
