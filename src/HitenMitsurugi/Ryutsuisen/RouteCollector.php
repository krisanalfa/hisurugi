<?php

namespace HitenMitsurugi\Ryutsuisen;

use Illuminate\Support\Str;
use Illuminate\Contracts\Routing\Registrar;

class RouteCollector
{
    protected $route;

    public function __construct(Registrar $route)
    {
        $this->route = $route;
    }

    public function all()
    {
        $routes = [];

        foreach ($this->route->getRoutes() as $route) {
            list($controller, $action) = Str::parseCallback($route->getActionName(), [null, null]);

            if ($controller and $action and ($controller !== 'Closure')) {
                if (!array_key_exists($controller, $routes)) {
                    $routes[$controller] = [];
                }

                $routes[$controller][] = $action;
            }
        }

        return $this->clean($routes);
    }

    protected function clean(array $routes)
    {
        foreach ($routes as $controller => $actions) {
            $actions = array_unique($actions);

            ksort($actions);

            $routes[$controller] = $actions;
        }

        return $routes;
    }
}
