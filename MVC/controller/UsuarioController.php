<?php

require_once "SecuredController.php";
require_once "./view/NavegacionView.php";

class UsuarioController extends SecuredController{

    private $NavegacionView;

    function __construct()
    {
       parent::__construct();
       $this->NavegacionView = new NavegacionView();
    }

    function Home($codigo_reporte = ''){
/*		session_start();
        if(!empty($_SESSION['user'])){*/
            $this->NavegacionView->Home($codigo_reporte);
/*        }else{
          header('Location: ' .LOGIN);
        }*/
      }

}


?>