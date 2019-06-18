<?php

require_once('model/RegistroModel.php');
require_once('view/NavegacionView.php');

class RegistroController extends Controller{

  function __construct()
    {
      $this->view = new NavegacionView();
      $this->model = new RegistroModel();
    }


//Verificar los datos ingresados por el usuario en el formulario de login
	public function VerificarLogin()
	  {
		if((!empty($_POST['mail'])) && (!empty($_POST['password']))){
    //Completo los campos de mail y contrasena, traigo el usuario de la BBDD
      $mail = $_POST['mail'];
		  $password = $_POST['password'];
		  $dbUsuario = $this->model->getUsuario($mail);
		  if(!empty($dbUsuario)){
      //El usuario existe en la BBDD
				if(password_verify($password, $dbUsuario['password'])){
            session_start();
          //Guardamos los atributos del usuario en el SESSION.
          $_SESSION['idUsuario'] = $dbUsuario['id_usuario'];
					$_SESSION['user'] = $dbUsuario['mail'];
          $_SESSION['admin'] = $dbUsuario['admin'];
          $_SESSION['nombre'] = $dbUsuario['nombre'];
          $_SESSION['apellido'] = $dbUsuario['apellido'];
					if($dbUsuario['admin'] == 1){
						$this->view->HomeAdmin();
					}else{
						$this->view->Home();
					}
				}else{
        //Existe el usuario pero la contrasena es incorrecta
					$this->view->errorFormLogin("Contraseña Incorrecta.");
				}
		  }else{
      //No existe tal usuario en la BBDD
			$this->view->errorFormLogin("Usuario Incorrecto.");
		  }
		}else{
    //No completo los campos del formulario para ingresar
		  $this->view->errorFormLogin("Debe Ingresarse Primero.");
		}
	  }

  //Checkear y guardar la informacion de usuario y contraseña
  public function VerificarRegistro(){
    try
      {
        $this->excepcionesIssetRegistro();
          try
            { //Verificacion de longitud de contraseña y que un mismo usuario no se registre dos veces
              if (strlen($_POST['password1'])<6)
                throw new Exception("La contraseña debe tener mas de 6 caracteres");
              if (strlen($_POST['password2'])<6)
                throw new Exception("La contraseña debe tener mas de 6 caracteres");
              if (($_POST['password1']) !== ($_POST['password2']))
                throw new Exception("Las contraseñas no coinciden");
              $mail = $this->model->getUsuario($_POST['mail']);
              if ($mail)
                  throw new Exception("Usuario ya registrado");
              $password = password_hash($_POST['password1'], PASSWORD_DEFAULT);
              $admin=false;
              $this->model->store($_POST['mail'],$_POST['nombre'],$_POST['apellido'],$password,$admin);
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


//Caso en los que no se ingresan datos de usuario o contraseña en el formulario
  private function excepcionesIssetRegistro()
    {
      if (!isset($_POST['mail']))
        throw new Exception("No se recibio el mail de usuario");
      if (!isset($_POST['password1']))
        throw new Exception("No se recibio la contraseña");
    }


}
?>
