<?php

# init configs
//require_once 'configs.php';

App::bind('configs', require_once 'configs.php');


//## @improve code
require_once Route::load('routes.php')
        ->direct( Request::uri(), Request::method() );

# required database

# required QueryBuilder

