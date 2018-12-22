<?php


class Route
{


    protected static $_routes = [
        'POST' => [],
        'GET' => [],
    ];


    public function define($routes)
    {
        static::$_routes = $routes;
    }

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
            return 'app/' . static::$_routes[$requestType][$uri];
        } else {
            die('Request not exist');
        }
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