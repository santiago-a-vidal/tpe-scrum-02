<?php
class SecuredController
{

//Inicializa la session y checkea la actividad para cerrar session en caso de ser necesario
  function __construct(){
    session_start();
    if(isset($_SESSION["user"])){
      if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
      //Destruyo la session despues de inactividad por determinado tiempo y vuelvo al login
        $this->logout();
      }
        $_SESSION['LAST_ACTIVITY'] = time(); //Actualizo el último instante de actividad
    }else{
        header(LOGIN);
    }
  }

//Destruye la session iniciada y redirige al login
  function logout(){
    session_start();
    session_destroy();
    header("Location: " .LOGIN);
  }
}
 ?>
