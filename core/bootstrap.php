<?php

# init configs
require_once 'configs.php';


# required Router Class main:: Router get all request before call to Controller
require_once 'core/Router.php';
  ##   init Obj Routes
  $router = new Router;
    # required routes defined
    require_once 'app/routes.php';


    require_once $router->direct('service'); // handle request from inside



# required database

# required QueryBuilder

