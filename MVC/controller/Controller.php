<?php

  define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/home');
  define('USER', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/user');
  define('MAPAADMIN', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/mapaadmin');
   
  define('LOGIN', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/login');
  class Controller
    {
      protected $view;
      protected $model;
    }

?>
