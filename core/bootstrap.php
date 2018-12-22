<?php

# init configs
require_once 'configs.php';


# required Router Class main:: Router get all request before call to Controller
require_once 'core/Request.php';
require_once 'core/Router.php';
  ##   init Obj Routes
//  $router = new Router;
//    # required routes defined
//    require_once 'app/routes.php';
//
//    //echo "<pre>";print_r($_SERVER);echo "</pre>";die; # debug for REQUEST_URI
//    require_once $router->direct(); // handle request from inside

//## @improve code
require_once Router::load('routes.php')
        ->direct(Request::uri());

# required database

# required QueryBuilder

