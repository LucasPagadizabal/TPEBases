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

  function showFormInscripcion($competencias,$deportistas){
    $this->smarty->assign('deportistas',$deportistas);
    $this->smarty->assign('competencias',$competencias);
    $this->smarty->display('formInscripcion.tpl');
  }
}




 ?>
