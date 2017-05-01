<?php

include_once(dirname(__DIR__)."/libs/Smarty.class.php");

/**
 *
 */
class viewServicios{

  protected $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function showSerivios(){
    //$this->smarty->assign('','');
    $this->smarty->display('servicios.tpl');
  }
}




 ?>
