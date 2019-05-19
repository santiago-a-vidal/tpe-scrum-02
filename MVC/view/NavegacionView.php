<?php

include_once "./libs/smarty.class.php";

class NavegacionView
{

  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function Home(){
    $this->smarty->display('templates/home.tpl');
  }

  function User(){
    $this->smarty->display('templates/user.tpl');
  }

  function Register(){
    $this->smarty->display('templates/register.tpl');
  }

}

 ?>
