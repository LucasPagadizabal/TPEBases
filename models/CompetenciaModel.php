<?php

include_once ("models/Model.php");

  class CompetenciaModel extends Model{

  function __construct() {
    parent::__construct();
  }

  function getDisciplinas(){
    $sentencia = $this->db->prepare('select cdoDisciplina,nombre from gr04_disciplina;');
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}

 ?>
