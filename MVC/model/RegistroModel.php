<?php

require_once 'Model.php';

class RegistroModel extends Model {

  //Registrarse, cargo los datos en la BBDD
  function store($usuario, $password,$admin)
    {
      $sentencia = $this->db->prepare('INSERT INTO usuario(nombre,password,admin) VALUES(?,?,?)');
      $sentencia->execute([$usuario,$password,$admin]);
    }

    //Traer todo el usuario por id
    function getUsuario($usuario)
      {
        $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE nombre = ? LIMIT 1");
        $sentencia->execute([$usuario]);
        return $sentencia->fetch(PDO::FETCH_ASSOC);
      }

    //Traer solo el id de usuario  
    function getUsuarioID($usuario)
       {
        $sentencia = $this->db->prepare( "SELECT id_usuario FROM usuario WHERE nombre = ? LIMIT 1");
        $sentencia->execute([$usuario]);
        return $sentencia->fetch(PDO::FETCH_ASSOC);
       }
}
?>
