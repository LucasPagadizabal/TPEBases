<?php

include_once(dirname(__DIR__)."/libs/Smarty.class.php");

  class viewHome{

    protected $smarty;

    function __construct(){
      $this->smarty = new Smarty();
    }

  function iniciar(){
    //$this->smarty->assign("mensaje", $m);
    $this->smarty->display("body.tpl");
  }

  function alta(){
    $this->smarty->assign("mensaje","alta");
    $this->smarty->display("alta.tpl");
  }

  function home(){
    $this->smarty->assign("mensaje","sacsaa");
    $this->smarty->display("home.tpl");
  }
}

 ?>
