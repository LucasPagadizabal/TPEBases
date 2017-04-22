<?php

include_once (dirname(__DIR__).'/view/viewHome.php');

class alta{

  protected $view;

  function __construct(){
    $this->view = new viewHome();
  }

  function iniciar(){
    $this->view->alta();
  }

}



 ?>
