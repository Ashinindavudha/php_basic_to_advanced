<?php

use Router as GlobalRouter;

require "core/bootstrap.php";
//require Router::load("routes.php")->direct(Request::uri());
//require "view/indexView.php";
//require "controllers/IndexController.php";
//require "controllers/AboutController.php";
//dd(trim($_SERVER['REQUEST_URI'], "/"));
class Router
{
    protected $routes = [];
    public function register($routes)
    {
        $this->routes = $routes;
        //var_dump($this->routes);
    }
    // public function showMyRoutes()
    // {
    //     var_dump($this->routes);
    // }
    // public static function load($file)
    // {
    //     $router = new static;
    //     require $file;
    //     return $router;
    // }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
        //throw new Exception("No route defined for this URI.");
    }
}
$router = new Router();
require "routes.php";
//$router->showMyRoutes();
require $router->direct(trim($_SERVER['REQUEST_URI'], "/"));
//require Router::load("routes.php")->direct(Request::uri());
