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
    $imagen=$this->subirImagen($foto);
    $sentencia=$this->db->prepare("INSERT INTO reporte (id_usuario,latitud,longitud,foto,descripcion) VALUES (?,?,?,?,?)");
    $sentencia->execute([$id_usuario,$latitud,$longitud,$imagen,$descripcion]);
    return $sentencia;
  }

  function getAllReportes(){
    $sentencia=$this->db->prepare("SELECT latitud, longitud, foto, descripcion FROM reporte");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function subirImagen($imagen){
   $destino_final = 'images/' . uniqid() . '.jpg';
   // echo "destino_final: ".$destino_final;
   move_uploaded_file($imagen, $destino_final);
   return $destino_final;
 }

}
?>
