<?php

require_once('model/ReporteModel.php');
require_once('model/RegistroModel.php');
require_once('view/NavegacionView.php');
require_once('UsuarioController.php');

  class ReporteController extends UsuarioController{

    function __construct()
      {
		    parent::__construct();
        $this->view = new NavegacionView();
        $this->model = new ReporteModel();
        $this->modelUsuario = new RegistroModel();
      }

//Una vez completado el formulario de reporte, actualizo la BBDD con el nuevo reporte y muestro el numero de reporte al usuario
    public function enviarReporte()
      {
        try{
          $imagen=$_FILES['imagen']['tmp_name'];
          $id_usuario=$this->modelUsuario->getUsuarioID($_POST['usuario']);
          if (!$_POST['latitud'])
              throw new Exception("Marque un punto en el mapa");
          $this->model->storeReporte($id_usuario['id_usuario'],$_POST['latitud'],$_POST['longitud'],$imagen,$_POST['descripcion']);
          $codigo_reporte ="<script language='JavaScript'>alert('Codigo de Reporte: ".$this->model->lastInsertId()."')</script>";
		      $this->Home($codigo_reporte);
        }
        catch (Exception $e)
          {
            $this->view->errorFormReporte($e->getMessage());
          }
      }

      public function borrarReporte(){
        $id_reporte = $_POST['id_reporte'];
        $this->model->borrarReporte($id_reporte);
        header('Location: '. MAPAADMIN);
      }

  }
?>
