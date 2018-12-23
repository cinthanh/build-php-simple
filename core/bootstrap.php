<?php

# init configs
//require_once 'configs.php';
require_once 'core/fn_common.php';

use App\Core\App;
use App\Core\Route;
use App\Core\Request;

App::bind('configs', require_once 'configs.php');


//## @improve code
Route::load('routes.php')
        ->direct( Request::uri(), Request::method() );

# required database

# required QueryBuilder

