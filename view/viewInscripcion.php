<?php

include_once(dirname(__DIR__)."/libs/Smarty.class.php");

/**
 *
 */
class viewInscripcion{

  protected $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function showFormInscripcion(){
    //$this->smarty->assign('','');
    $this->smarty->display('formInscripcion.tpl');
  }
}




 ?>
