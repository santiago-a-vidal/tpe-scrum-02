<?php

class NavegacionView extends View {

  function Home(){
    $this->smarty->display('templates/home.tpl');
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

  function errorFormReporte($error = '')
    {
      $this->smarty->assign('error', $error);
      return $this->smarty->display('templates/user.tpl');
    }

    function mapaAdmin($reportes){
      $this->smarty->assign('reportes', $reportes);
      $this->smarty->display('templates/mapaAdmin.tpl');
    }

}

 ?>
