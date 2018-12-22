<?php


class Router
{


    protected $_routes = [];


    public function define($routes)
    {
        $this->_routes = $routes;
    }

    public function direct($uri) //
    {
        if (array_key_exists($uri, $this->_routes)) {
            return 'app/' . $this->_routes[$uri];
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