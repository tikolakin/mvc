<?php
/**
 * Created by PhpStorm.
 * User: tiko
 * Date: 13.02.16
 * Time: 13:35
 */

namespace Acme\Core\Routing;

use Acme\Core\Routing\Route\Route;


class Router
{
    # routes added to the router.
    private $routes = array();

    # add new route to the router.
    public function add(Route $route) {
        # push the route into the array.
        $this->routes[] = $route;
    }

    # dispatches an uri path.
    # returns the matched route
    # or null if no route matched.
    public function dispatch($path) {
        # loop through the given route.
        foreach($this->routes as $route) {
            if($route->match($path) === true) {
                # the route matches
                # so let's return it.
                return $route;
            }
        }
    }



}