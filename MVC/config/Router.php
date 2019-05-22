<?php

  class Router

    {

      private $routes;
      private $params;

      function __construct()
        {
          $this->routes = [];
        }

      public function AddRoute($url, $verb, $controller, $method)
        {
          $this->routes[] = [$url, $verb, $controller, $method];
        }
      /**
      *  Dada una URL patron tipo "algo/:id"
      * devuelve true si coinciden($url="algo/12")
      * y guarda el 12 en un $url_params asociado con un ":id"
      */
      private function matchURL($route_url, $url)
        {
          $urlExploded = explode('/', trim($url,'/'));
          $route_urlExploded = explode('/', trim($route_url,'/'));
          if(sizeof($urlExploded) != sizeof($route_urlExploded))
            return false;
          $this->params = [];
          for($i = 0; $i< sizeof($urlExploded); $i++)
            if($urlExploded[$i] != $route_urlExploded[$i])
              if(isset($route_urlExploded[$i][0])&&$route_urlExploded[$i][0]== ":")
                $this->params[$route_urlExploded[$i]] = $urlExploded[$i];
              else
                return false;
            return true;
        }

      public function Route($url)
        {
          foreach ($this->routes as  $route)
            {
              $route_url = $route[0];
              $route_verb = $route[1];
              if($this->matchURL($route_url, $url) && $route_verb == $_SERVER['REQUEST_METHOD'])
                {
                  $controller =  $route[2];
                  $metodo = $route[3];
                  return [ $controller, $metodo, $this->params];
                }
            }
        }


    }
?>
