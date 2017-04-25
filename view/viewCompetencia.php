<?php

include_once(dirname(__DIR__)."/libs/Smarty.class.php");

class viewCompetencia{

  protected $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function mostrarFormAltaCompetencia(){
  //  $this->smarty->assign();
    $this->smarty->display("formAltaComp.tpl");
  }
}



 ?>
