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

  //En caso de haber usuario muestra el home de la pagina,en caso contrario,redirige al login
    function Home($codigo_reporte = ''){
        if(!empty($_SESSION['user'])){
            $this->NavegacionView->Home($codigo_reporte);
        }else{
          header('Location: ' .LOGIN);
        }
      }

  //Trae los reportes realizados por determinado usuario y los muestra    
      function misReportes(){
        $id_usuario = $_SESSION['idUsuario'];
        $reportes = $this->ReporteModel->getAllReportesUsuario($id_usuario);
        $this->NavegacionView->misReportes($reportes);
      }

}


?>
