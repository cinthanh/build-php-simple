<?php

# init configs
//require_once 'configs.php';
require_once 'core/fn_common.php';

App::bind('configs', require_once 'configs.php');


//## @improve code
Route::load('routes.php')
        ->direct( Request::uri(), Request::method() );

# required database

# required QueryBuilder

