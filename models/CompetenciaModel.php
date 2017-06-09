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
    $id = $this->db->prepare('select max(id) from gr04_inscripcion;');
    $id->execute();
    $ultimoid = $id->fetch(PDO::FETCH_ASSOC);
    $nuevoid=$ultimoid['max']+1;
    $arrDni = explode(";",$datos["doc_deportista"]);
    $dni = $arrDni[1];
    $tipoDoc = $arrDni[0];
    $idCompetencia=$datos['idcompetencia'];
    try {
      $sentencia = $this->db->prepare("INSERT into gr04_inscripcion(id,tipoDoc,nroDoc,idCompetencia,fecha) values(?,?,?,?,?)");
      $sentencia->execute(array($nuevoid,$tipoDoc,$dni,$idCompetencia,date("Y-m-d H:i:s")));
      var_dump($sentencia->errorInfo());
    } catch (Exception $e) {

    }
  }

  function addCompetencia($competencia){
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    $id = $this->db->prepare('select max(idCompetencia) from gr04_competencia;');
    $id->execute();
    $ultimoid = $id->fetch(PDO::FETCH_ASSOC);
    $nuevoid=$ultimoid['max']+1;

    if(isset($competencia["cdodisciplina"])){
      $cdoDis = $competencia["cdodisciplina"];
    }
    if(isset($competencia["nombrecomp"])){
      $nombrecomp = $competencia["nombrecomp"];
    }
    if($competencia['fecha']!=''){
      $fecha =$competencia['fecha'];
    }
    if(isset($competencia["lugar"])){
      $lugar = $competencia["lugar"];
    }
    if(isset($competencia["localidad"])){
      $localidad = $competencia["localidad"];
    }
    if(isset($competencia["organizador"])){
      $organizador = $competencia["organizador"];
    }
    if(isset($competencia['individual'])){
      $individual = "1";
    }else{
      $individual ="0";//1
    }
    if($competencia['fechalimite']!=''){
      $fechalimite =$competencia['fechalimite'];
    }
    if(isset($competencia["cantjueces"])){
      $cantjueces = $competencia["cantjueces"];
    }
    if(isset($competencia['cobertura'])){
      $cobertura = "1";
    }else{
      $cobertura ="0";//1
    }
    if(isset($competencia["mapa"])){
      $mapa = $competencia["mapa"];
    }
    if(isset($competencia["web"])){
      $web = $competencia["web"];
    }
    var_dump($cdoDis);
    try {//(tipoDoc,nroDoc,federado,fechaUltimaFederacion,nroLicencia,cdoCategoria,cdoDisciplina,cdofederacion,cdodisciplinafederacion)
      $sentencia = $this->db->prepare("INSERT INTO gr04_competencia VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
      $sentencia->execute(array($nuevoid,$cdoDis[0],$nombrecomp,$fecha,$lugar,$localidad,$organizador,$individual,$fechalimite,$cantjueces,$cobertura,$mapa,$web));
      var_dump($sentencia->errorInfo());
    } catch (Exception $e) {

    }
  }
}

 ?>
