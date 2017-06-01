<?php
include_once ("models/Model.php");

class DeportistaModel extends Model{

  function __construct() {
    parent::__construct();
  }

  function getPersonas(){
    $sentencia = $this->db->prepare("select nroDoc,tipoDoc from G4_persona where nroDoc not in(select nroDoc from g4_deportista) AND tipoDoc not in(select tipoDoc from g4_deportista)");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getCategorias(){
    $sentencia = $this->db->prepare("select cdoDisciplina,cdoCategoria from G4_categoria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getFederaciones(){
    $sentencia = $this->db->prepare("select cdoFederacion,cdoDisciplina from G4_federacion");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function addDeportista($deportista) {
    error_reporting(E_ERROR | E_WARNING | E_PARSE);

    $arrDni = explode(";",$deportista["doc_deportista"]);
    $dni = $arrDni[0];
    $tipoDoc = $arrDni[1];//2

    if(isset($deportista['federado'])){
      $federado = "1";
    }else{
      $federado ="0";//1
    }

    $arrCat = explode(";",$deportista["categoria"]);
    $cdoCat = $arrCat[0];
    $cdoDis = $arrCat[1];//2

    if($deportista['fecha']!=''){
      $fecha =$deportista['fecha'];
    }
    if($deportista['nroLicencia'] !=''){
      $nroLicencia = $deportista['nroLicencia'];
    }

    if(isset($deportista["cdoFederacion"])){
      $arrFed = explode(";",$deportista["cdoFederacion"]);
      $cdoFed = $arrFed[0];
      $cdoDisFed = $arrFed[1];//2
    }else{
      $cdoFed = NULL;
      $cdoDisFed = NULL;
    }
    try {//(tipoDoc,nroDoc,federado,fechaUltimaFederacion,nroLicencia,cdoCategoria,cdoDisciplina,cdofederacion,cdodisciplinafederacion)
      $sentencia = $this->db->prepare("INSERT INTO G4_deportista  VALUES(?,?,?,?,?,?,?)");
      $sentencia->execute(array($tipoDoc,(int) $dni,$federado,$fecha,$nroLicencia,$cdoCat,$cdoDis));
    } catch (Exception $e) {

    }

  }

 }
 ?>
