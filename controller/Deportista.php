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
    //traer dni y tipo de personas
      $personas = $this->modelDeportista->getPersonas();
    //traer cdo de competencia y cdo Disciplina
      $categorias = $this->modelDeportista->getCategorias();
    //traer cdo de federacion y cdo de Disciplina de federacion--pueden ser null
      $federaciones = $this->modelDeportista->getFederaciones();

    //reestricciones--
    //    Un deportista no puede formar parte de más de tres equipos en un mismo año.

    $this->viewDeportista->mostrarFormAltaDepor($personas,$categorias,$federaciones);
  }
  function altaDepor(){
    $deportista = $_POST;
    $arr = $this->modelDeportista->addDeportista($deportista);
    $this->viewDeportista->mostrarAltaInscripcion($arr["mensaje"],$arr["estilo"],$deportista);
  }

}




 ?>
