<?php
/*
$path = "db/";
if(strpos(pathinfo($_SERVER["SCRIPT_FILENAME"])["dirname"], 'api')) $path = "../" . $path;
include_once $path .'config.php';
*/
abstract class Model{
  protected $db;
  function __construct() {
    try {
      $host = 'dbases.exa.unicen.edu.ar';/*port=5432*/
      $this->db = new PDO("pgsql:host=$host;port=6432;dbname=cursada", 'unc_248624', '248624');
      $this->db->exec('SET search_path TO unc_248624');
    } catch (PDOException $e) {
        header('Location: error.php');
        die();
    }
  }
}

 ?>
