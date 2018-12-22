<?php


class Router
{


    protected $_routes = [];


    public function define($routes)
    {
        $this->_routes = $routes;
    }

    public function direct() //
    {
        $uri = $this->_url(); ## issue uri = / or // or /// -> solution trim()
        if (array_key_exists($uri, $this->_routes)) {
            return 'app/' . $this->_routes[$uri];
        } else {
            die('Request not exist');
        }
    }

    private function _url()
    {
        return trim($_SERVER['REQUEST_URI'],'/');
    }
    public function getRoutes()
    {
        return $this->_routes;
    }

}