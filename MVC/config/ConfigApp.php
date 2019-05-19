<?php

//CONSTANTES
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"]. ':'.$_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/home');

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'NavegacionController#Home',
      'home'=> 'NavegacionController#Home',
      'user'=> 'NavegacionController#User'
    ];

}

 ?>
