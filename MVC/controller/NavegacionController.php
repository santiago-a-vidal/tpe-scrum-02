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

    function home(){
      $this->NavegacionView->Home();
    }

    function user(){
      $this->NavegacionView->User();
    }

    function register(){

      $this->NavegacionView->Register();
    }

    function mapaAdmin(){
      $reportes = $this->ReporteModel->getAllReportes();
      $this->NavegacionView->mapaAdmin($reportes);
    }

  }

?>
