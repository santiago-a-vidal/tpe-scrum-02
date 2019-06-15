<?php

require_once 'Model.php';

class ReporteModel extends Model {

  function getAll(){
    //traer todos los reportes
    $sentencia= $this->db->prepare("SELECT * FROM reporte");
    $sentencia-> execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getAllReportesUsuario($id_usuario){
    //traemos todos los reportes de un usuario
    $sentencia=$this->db->prepare("SELECT * FROM reporte WHERE id_usuario=?");
    $sentencia->execute([$id_usuario]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function storeReporte($id_usuario,$latitud,$longitud,$foto,$descripcion){
    //insertamos un reporte en la base de datos
    $imagen=$this->subirImagen($foto);
    $sentencia=$this->db->prepare("INSERT INTO reporte (id_usuario,latitud,longitud,foto,descripcion) VALUES (?,?,?,?,?)");
    $sentencia->execute([$id_usuario,$latitud,$longitud,$imagen,$descripcion]);
    return $sentencia;
  }

  function getAllReportes(){
    //traemos todos los reportes sin id de usuario ni id de reporte
    $sentencia=$this->db->prepare("SELECT latitud, longitud, foto, descripcion FROM reporte");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function subirImagen($imagen){
    //esta funcion traduce la ruta absoluta de la imagen a relativa
   $destino_final = 'images/' . uniqid() . '.jpg';
   // echo "destino_final: ".$destino_final;
   move_uploaded_file($imagen, $destino_final);
   return $destino_final;
 }

 //Función para traer el último reporte realizado
   function lastInsertId(){
    //traemos todos los reportes sin id de usuario ni id de reporte
    $sentencia=$this->db->lastInsertId();
    return $sentencia;
  }


}
?>
