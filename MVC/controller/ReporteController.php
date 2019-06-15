<?php

require_once('model/ReporteModel.php');
require_once('model/RegistroModel.php');
require_once('view/NavegacionView.php');
require_once('UsuarioController.php');

  class ReporteController extends UsuarioController{

    function __construct()
      {
		parent::__construct();
        $this->model = new ReporteModel();
        $this->modelUsuario = new RegistroModel();
      }

    public function EnviarReporte()
      {
        try{
          $imagen=$_FILES['imagen']['tmp_name'];
          $id_usuario=$this->modelUsuario->getUsuarioID($_POST['usuario']);
          if (!$id_usuario)
              throw new Exception("Usuario no registrado");
          $this->model->storeReporte($id_usuario['id_usuario'],$_POST['latitud'],$_POST['longitud'],$imagen,$_POST['descripcion']);
        $codigo_reporte ="<script language='JavaScript'>alert('Codigo de Reporte: ".$this->model->lastInsertId()."')</script>";
		$this->Home($codigo_reporte);
        }
        catch (Exception $e)
          {
            $this->view->errorFormReporte($e->getMessage());
          }
      }

  }
?>
