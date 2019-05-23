<?php

  class Model
    {

      protected $db;

      function __construct()

        {
          try
            { //le decimos al model que cuando se instancie le pegue a mysql
              $this->db = new PDO('mysql:host='.DB_HOST.';'
              .'dbname='.DB_NAME.';charset=utf8'
              , DB_USER, DB_PASSWORD);
            }
              catch (PDOException $e)
              {
                $this->buildDDBBfromFile(DB_NAME,DB_ARCHIVO);
              }
        }

      public function buildDDBBfromFile()
        {
          try
            {
              $this->db = new PDO('mysql:host='.DB_HOST , DB_USER, DB_PASSWORD);
              $this->db->exec('CREATE DATABASE IF NOT EXISTS '.DB_NAME); //Creacion SQL
              $this->db->exec('USE '.DB_NAME); //Sentencia para usar por defecto la BBDD
              $queries = $this->loadSQLSchema(DB_ARCHIVO); //Cargar el archivo de texto
              $i = 0; // Ejecuto todos los queries
              while ($i < count($queries) && strlen($this->db->errorInfo()[2]) == 0)
                {
                  $this->db->exec($queries[$i]);
                  $i++;
                }
            }
              catch (Exception $e)
              {
                echo $e;
              }
        }

      public function loadSQLSchema($dbfile)
        {
          $queries = fopen("database/$dbfile", "r+");
          $sql = "";
          while (!feof($queries)) {
            $linea = fgets($queries);
            $sql .= $linea;
          }
          fclose($queries);
          $queries = explode(";", $sql);
          return $queries;
        }


    }
 ?>
