<?php

require_once 'Model.php';

class RegistroModel extends Model {

  function store($usuario, $password,$admin)
    {
      $sentencia = $this->db->prepare('INSERT INTO usuario(nombre,password,admin) VALUES(?,?,?)');
      $sentencia->execute([$usuario,$password,$admin]);
    }

    function getUsuario($usuario)
      {
        $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE nombre = ? LIMIT 1");
        $sentencia->execute([$usuario]);
        return $sentencia->fetch(PDO::FETCH_ASSOC);
      }

      function getUsuarioID($usuario)
        {
          $sentencia = $this->db->prepare( "SELECT id_usuario FROM usuario WHERE nombre = ? LIMIT 1");
          $sentencia->execute([$usuario]);
          return $sentencia->fetch(PDO::FETCH_ASSOC);
        }
}
?>
