<?php

require_once('model/RegistroModel.php');
require_once('view/NavegacionView.php');

class RegistroController extends Controller{

  function __construct()
    {
      $this->view = new NavegacionView();
      $this->model = new RegistroModel();
    }

  public function store(){
    try
      {
        $this->excepcionesIssetRegistro();
          try
            {
              if (strlen($_POST['password'])<6)
                throw new Exception("La contraseña debe tener mas de 6 caracteres");
              $usuario = $this->model->getUsuario($_POST['usuario']);
              if ($usuario)
                  throw new Exception("Usuario ya registrado");
              $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
              $admin=false;
              $this->model->store($_POST['usuario'],$password,$admin);
              header('Location: '.HOME);
            }
            catch (Exception $e)
              {
                $this->view->errorFormRegistro($e->getMessage());
              }
    }
      catch (Exception $e)
        {
          $this->view->errorFormRegistro($e->getMessage());
        }
  }

  private function excepcionesIssetRegistro()
    {
      if (!isset($_POST['usuario']))
        throw new Exception("No se recibio el nombre de usuario");
      if (!isset($_POST['password']))
        throw new Exception("No se recibio la contraseña");
    }


}
?>
