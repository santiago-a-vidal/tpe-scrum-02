<?php

require_once "./view/NavegacionView.php";

class NavegacionController
{

  private $NavegacionView;

  function __construct()
  {

    $this->NavegacionView = new NavegacionView();
  }

  function home(){

    $this->NavegacionView->Home();
  }

  function deposito(){
    
    $this->NavegacionView->Deposito();
  }

  

}

 ?>
