<?php

require_once "./view/NavegacionView.php";

  class NavegacionController extends Controller{

    private $NavegacionView;
    
    function __construct()
    {
      $this->NavegacionView = new NavegacionView();
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

  }

?>
