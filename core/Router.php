<?php


class Router
{


    protected $_routes = [
        'POST' => [],
        'GET' => [],
    ];


    public function define($routes)
    {
        $this->_routes = $routes;
    }

    public function get($uri, $controller)
    {
        $this->_routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->_routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType) //
    {
        if (array_key_exists($uri, $this->_routes[$requestType])) {
            return 'app/' . $this->_routes[$requestType][$uri];
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

    public function getRoutes()
    {
        return $this->_routes;
    }

}