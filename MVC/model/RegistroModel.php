<?php

require_once 'Model.php';

class RegistroModel extends Model {

  function store($usuario, $password,$admin)
    {//registrarse
      $sentencia = $this->db->prepare('INSERT INTO usuario(nombre,password,admin) VALUES(?,?,?)');
      $sentencia->execute([$usuario,$password,$admin]);
    }

    function getUsuario($usuario)
      {//traer todo el usuario por id
        $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE nombre = ? LIMIT 1");
        $sentencia->execute([$usuario]);
        return $sentencia->fetch(PDO::FETCH_ASSOC);
      }

    function getUsuarioID($usuario)
       {//traer solo el id de usuario
        $sentencia = $this->db->prepare( "SELECT id_usuario FROM usuario WHERE nombre = ? LIMIT 1");
        $sentencia->execute([$usuario]);
        return $sentencia->fetch(PDO::FETCH_ASSOC);
       }
}
?>
