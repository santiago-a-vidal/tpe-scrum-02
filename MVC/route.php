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
require_once 'controller/UsuarioController.php';

$router = new Router();

$router->AddRoute("", "GET", "NavegacionController", "Login");
$router->AddRoute("login", "GET", "NavegacionController", "Login");
$router->AddRoute("home", "GET", "UsuarioController", "Home");
$router->AddRoute("homeadmin", "GET", "NavegacionController", "HomeAdmin");
$router->AddRoute("reportar", "GET", "NavegacionController", "User");
$router->AddRoute("mapaadmin", "GET", "NavegacionController", "MapaAdmin");
$router->AddRoute("register", "GET", "NavegacionController", "Registro");
$router->AddRoute("registeruser", "POST", "RegistroController", "VerificarRegistro");
$router->AddRoute("loginuser", "POST", "RegistroController", "verificarLogin");
$router->AddRoute("logout", "GET", "UsuarioController", "logout");
$router->AddRoute("enviarreporte", "POST", "ReporteController", "EnviarReporte");
$router->AddRoute("misReportes", "GET", "UsuarioController", "misReportes");

$route = $_GET['action'];
$array = $router->Route($route);
if(sizeof($array) == 0)
    // echo (new NavegacionController())->login();
    header('Location: ' .LOGIN);
else
{
    $controller = $array[0];
    $metodo = $array[1];
    $url_params = $array[2];
    echo (new $controller())->$metodo($url_params);
}

 ?>
