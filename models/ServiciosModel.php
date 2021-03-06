<?php
include_once ("models/Model.php");

class ServiciosModel extends Model{

  function __construct() {
    parent::__construct();
  }

  function getDeportistas($competencia){
    $sentencia = $this->db->prepare("select * from  fn_GR04_deportista_competencia($competencia)");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getEquipos($deportista){
    $arrDepo = explode(";",$deportista);
    $dni = $arrDepo[1];
    $tipoDoc = $arrDepo[0];
    $sentencia = $this->db->prepare("select * from  fn_GR04_equipos_deportista('$tipoDoc',$dni)");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getClasificaciones($competencia){
    $sentencia = $this->db->prepare("select * from  fn_GR04_equipos_deportista($competencia)");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}
 ?>
