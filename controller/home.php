<?php
  include_once (dirname(__DIR__).'/view/viewHome.php');

  class home{

    protected $view;

    function __construct(){
      $this->view = new viewHome();
    }

    function iniciar($mensaje){
      $this->view->iniciar($mensaje);
    }

    function home(){
      $this->view->home();
    }

  }
 ?>
