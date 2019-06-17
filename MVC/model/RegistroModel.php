<?php

require_once 'Model.php';

class RegistroModel extends Model {

  //Registrarse, cargo los datos en la BBDD
  function store($mail, $nombre, $apellido, $password,$admin)
    {
      $sentencia = $this->db->prepare('INSERT INTO usuario(mail,nombre,apellido,password,admin) VALUES(?,?,?,?,?)');
      $sentencia->execute([$mail, $nombre, $apellido, $password,$admin]);
    }

    //Traer todo el usuario por id
    function getUsuario($mail)
      {
        $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE mail = ? LIMIT 1");
        $sentencia->execute([$mail]);
        return $sentencia->fetch(PDO::FETCH_ASSOC);
      }

    //Traer solo el id de usuario   
    function getUsuarioID($mail)
       {
        $sentencia = $this->db->prepare( "SELECT id_usuario FROM usuario WHERE mail = ? LIMIT 1");
        $sentencia->execute([$mail]);
        return $sentencia->fetch(PDO::FETCH_ASSOC);
       }
}
?>
