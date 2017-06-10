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

  function showServicios(){
    $this->smarty->display('servicios.tpl');
  }

  function showServicio1($competencias){
    $this->smarty->assign('competencias',$competencias);
    $this->smarty->display('servicio1.tpl');
  }

  function showListaServicio1($deportistas){
    $this->smarty->assign('deportistas',$deportistas);
    $this->smarty->display('servicio1lista.tpl');
  }

  function showServicio2($deportistas){
    $this->smarty->assign('deportistas',$deportistas);
    $this->smarty->display('servicio2.tpl');
  }

  function showListaServicio2($equipos){
    $this->smarty->assign('equipos',$equipos);
    $this->smarty->display('servicio2lista.tpl');
  }


  function showServicio3($competencias){
    $this->smarty->assign('competencias',$competencias);
    $this->smarty->display('servicio3.tpl');
  }

  function showListaServicio3($clasificaciones){
    $this->smarty->assign('clasificaciones',$clasificaciones);
    $this->smarty->display('servicio3lista.tpl');
  }
}




 ?>
