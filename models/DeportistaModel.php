<?php
include_once ("models/Model.php");

class DeportistaModel extends Model{

  function __construct() {
    parent::__construct();
  }



  function addDeportista($deportista) {
    $sentencia = $this->db->prepare("INSERT INTO deportista(id_deportista,nombre, dni) VALUES(?,?,?)");
    $sentencia->execute(array($deportista["id_deportista"],$deportista["nombre"], $deportista["dni"]));
    //$id_deportista = $this->db->lastInsertId('id_deportista');
    echo("sarasa");
  }


 }?>
