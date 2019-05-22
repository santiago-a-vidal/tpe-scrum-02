<?php

require_once 'Model.php';

class ReporteModel extends Model {

  function getAll(){
    $sentencia= $this->db->prepare("SELECT * FROM reporte");
    $sentencia-> execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getAllReportesUsuario($id_usuario){
    $sentencia=$this->db->prepare("SELECT * FROM reporte WHERE id_usuario=?");
    $sentencia->execute([$id_usuario]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function storeReporte($id_usuario,$latitud,$longitud,$foto,$descripcion){
    $sentencia=$this->db->prepare("INSERT INTO reporte (id_usuario,latitud,longitud,foto,descripcion) VALUES (?,?,?,?,?)");
    $sentencia->execute([$id_usuario,$latitud,$longitud,$foto,$descripcion]);
    return $sentencia;
  }

}
?>
