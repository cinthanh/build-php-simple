<?php

namespace App\Core;

class Route
{


    protected static $_routes = [
        'POST' => [],
        'GET' => [],
    ];


    public static function get($uri, $controller)
    {
        static::$_routes['GET'][$uri] = $controller;
    }

    public static function post($uri, $controller)
    {
        static::$_routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType) //
    {
        if (array_key_exists($uri, static::$_routes[$requestType])) {

            return $this->_callAction(
                ...explode('@', static::$_routes[$requestType][$uri])
            );
        } else {
            die('Request not exist');
        }
    }

    protected function _callAction($controller, $action)
    {
        $controller = "App\\Controller\\{$controller}";
        $controller = new $controller;
        if ( ! method_exists($controller, $action)) {
            throw new Exception("Class {$controller} not has method {$action}");
        }

        return $controller->$action(); ## return (new $controller)->$action();
    }

    public static function load($file)
    {
        //TODO: @create load fn
        $router = new static; ## remember

        require_once 'app/' . $file;
        return $router;
    }

    public static function getRoutes()
    {
        return static::$_routes;
    }

}