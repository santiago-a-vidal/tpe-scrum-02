<?php

require_once "SecuredController.php";
require_once "./view/NavegacionView.php";

class UsuarioController extends SecuredController{

    private $NavegacionView;
    private $ReporteModel;

    function __construct()
    {
       parent::__construct();
       $this->NavegacionView = new NavegacionView();
       $this->ReporteModel = new ReporteModel();
    }

    function Home($codigo_reporte = ''){
/*		session_start();
        if(!empty($_SESSION['user'])){*/
            $this->NavegacionView->Home($codigo_reporte);
/*        }else{
          header('Location: ' .LOGIN);
        }*/
      }

      function misReportes(){

        $id_usuario = $_SESSION['idUsuario'];
        $reportes = $this->ReporteModel->getAllReportesUsuario($id_usuario);

        $this->NavegacionView->misReportes($reportes);
      }

}


?>