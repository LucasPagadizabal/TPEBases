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

  function getCompetencias(){
    $sentencia = $this->db->prepare('select idCompetencia,nombre from gr04_competencia;');
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function inscribirDeportista($datos){
    $id = $this->db->prepare('select max(idCompetencia) from gr04_inscripcion;');
    $id->execute();
    $ultimoid = $id->fetch(PDO::FETCH_ASSOC);
    $nuevoid=$ultimoid['max']+1;
    $arrDni = explode(";",$datos["doc_deportista"]);
    $dni = $arrDni[1];
    $tipoDoc = $arrDni[0];
    $idCompetencia=$datos['idcompetencia'];
    $sentencia = $this->db->prepare("INSERT into gr04_inscripcion(id,tipoDoc,nroDoc,idCompetencia,fecha) values(?,?,?,?,?)");
    $sentencia->execute(array($nuevoid,$tipoDoc,$dni,$idCompetencia,"03/03/2017"));
  }
}

 ?>
