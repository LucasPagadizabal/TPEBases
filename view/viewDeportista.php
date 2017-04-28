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

  function mostrarFormAltaDepor(){
    //  $this->smarty->assign();
      $this->smarty->display("formAltaDepor.tpl");
  }


}


 ?>
