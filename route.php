<?php

//Incluimos el archivo de configuracion
require_once 'config/Router.php';
require_once 'config/db-config.php';
require_once 'model/Model.php';
require_once 'view/View.php';
require_once 'controller/Controller.php';
require_once 'controller/NavegacionController.php';
require_once 'controller/RegistroController.php';
require_once 'controller/ReporteController.php';

$router = new Router();

$router->AddRoute("", "GET", "NavegacionController", "Login");
$router->AddRoute("home", "GET", "NavegacionController", "Home");
$router->AddRoute("reportar", "GET", "NavegacionController", "User");
// $router->AddRoute("register", "GET", "NavegacionController", "Register");
// $router->AddRoute("registerUser", "POST", "RegistroController", "store");
// $router->AddRoute("userReport", "POST", "ReporteController", "store");
$router->AddRoute("mapaAdmin", "GET", "NavegacionController", "mapaAdmin");

$route = $_GET['action'];
$array = $router->Route($route);
if(sizeof($array) == 0)
    echo (new NavegacionController())->login();
else
{
    $controller = $array[0];
    $metodo = $array[1];
    $url_params = $array[2];
    echo (new $controller())->$metodo($url_params);
}

 ?>
