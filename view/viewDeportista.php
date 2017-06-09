<?php

include_once(dirname(__DIR__)."/libs/Smarty.class.php");

/**
 *
 */
class viewDeportista{

  protected $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function mostrarFormAltaDepor($personas,$categorias,$federaciones){
      $this->smarty->assign("federaciones",$federaciones);
      $this->smarty->assign("categorias",$categorias);
      $this->smarty->assign("personas",$personas);
      $this->smarty->display("formAltaDepor.tpl");
  }

  function mostrarAltaInscripcion($mensaje,$estilo,$deportista){
    $this->smarty->assign("mensaje",$mensaje);
    $this->smarty->assign("estilo",$estilo);
    $this->smarty->assign("deportista",$deportista);
    $this->smarty->display("mensajeAltaDeportista.tpl");
  }

}


 ?>
