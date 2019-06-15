<?php

class NavegacionView extends View {

  function Login(){
    $this->smarty->display('templates/login.tpl');
  }

  function Home($codigo_reporte = ''){
    $this->smarty->assign('codigo_reporte', $codigo_reporte);
    $this->smarty->display('templates/home.tpl');
  }


    function HomeAdmin(){
    $this->smarty->display('templates/homeAdmin.tpl');
  }

  function User(){
    $this->smarty->display('templates/user.tpl');
  }

  function Register(){
     $this->smarty->display('templates/register.tpl');
  }

  function errorFormRegistro($error = '')
    {
      $this->smarty->assign('error', $error);
      return $this->smarty->display('templates/register.tpl');
    }

  function errorFormLogin($error = '')
    {
      $this->smarty->assign('error', $error);
      return $this->smarty->display('templates/login.tpl');
    }

  function errorFormReporte($error = '')
    {
      $this->smarty->assign('error', $error);
      return $this->smarty->display('templates/user.tpl');
    }

    function mapaAdmin($reportes){
      $this->smarty->assign('reportes', $reportes);
      $this->smarty->display('templates/mapaAdmin.tpl');
    }
    
    function misReportes($misReportes){

      $this->smarty->assign('reportes', $misReportes);
      $this->smarty->display('templates/misReportes.tpl');
    }
}

 ?>
