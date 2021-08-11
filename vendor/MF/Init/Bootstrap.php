<?php
namespace MF\Init;


abstract class Bootstrap{
    private $route;

    abstract protected function initRoutes();

    public function __construct(){
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function getRoute(){
        return $this->route;
    }
    public function setRoute(array $route){
        $this->route = $route;
    }

    protected function run($url){
        foreach($this->getRoute() as $key => $route){
            if($url == $route['route']){
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                
                $controller = new $class;

                $action = $route['action'];

                $controller->$action();

            }
        }
    }

    protected function getUrl(){ // para saber onde o usuario está
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
?>