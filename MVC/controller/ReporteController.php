<?php

require_once('model/ReporteModel.php');
require_once('model/RegistroModel.php');
require_once('view/NavegacionView.php');

  class ReporteController extends Controller{

    function __construct()
      {
        $this->view = new NavegacionView();
        $this->model = new ReporteModel();
        $this->modelUsuario = new RegistroModel();
      }

    public function store()
      {
        try{
          $imagen=$_FILES['imagen']['tmp_name'];
          $id_usuario=$this->modelUsuario->getUsuarioID($_POST['usuario']);
          if (!$id_usuario)
              throw new Exception("Usuario no registrado");
          print_r($id_usuario);
          $this->model->storeReporte($id_usuario['id_usuario'],$_POST['latitud'],$_POST['longitud'],$imagen,$_POST['descripcion']);
          header('Location: '.HOME);
        }
        catch (Exception $e)
          {
            $this->view->errorFormReporte($e->getMessage());
          }
      }
  }
?>
