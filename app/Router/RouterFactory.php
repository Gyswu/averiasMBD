<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{

    use Nette\StaticClass;

    public static function createRouter(): RouteList
    {

        $router = new RouteList;

        $router->addRoute('admin/<presenter>/<action>[/<id>]', [

            'presenter' => 'Homepage',

            'action' => 'default',

            'module' => 'Admin'

        ]);

        $router->addRoute('api/<presenter>/<action>[/<id>]', [

            'presenter' => 'Home',

            'action' => 'default',

            'module' => 'Api'

        ]);

        $router->addRoute('<presenter>/<action>[/<id>]', 'Homepage:default');

        return $router;
    }
}
