<?php

require_once "./view/NavegacionView.php";
require_once "./model/ReporteModel.php";

  class NavegacionController extends Controller{

    private $NavegacionView;
    private $ReporteModel;

    function __construct()
    {
      $this->NavegacionView = new NavegacionView();
      $this->ReporteModel = new ReporteModel();
    }

//Cuando en el route no hay parametros entra en esta funcion que pide login
    function Login(){
      $this->NavegacionView->Login();
    }

    function Home(){
      $this->NavegacionView->Home();
    }

	    function HomeAdmin(){
      $this->NavegacionView->HomeAdmin();
    }

    function User(){
		$this->NavegacionView->User();
    }

    function Registro(){
		$this->NavegacionView->Register();
	}

    function MapaAdmin(){
      $reportes = $this->ReporteModel->getAllReportes();
      $this->NavegacionView->mapaAdmin($reportes);
    }

  }

?>
