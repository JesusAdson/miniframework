<?php
namespace App;

use MF\Init\Bootstrap;
// ficou na classe route somente os requisitos funcionais, no cao as rotas
class Route extends Bootstrap{
    protected function initRoutes(){// quais rotas q a app possui
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );
        $routes['sobre_nos'] = array(
            'route' => '/sobre_nos',
            'controller' => 'indexController',
            'action' => 'sobreNos'
        );

        $this->setRoute($routes);
    }
}
?>