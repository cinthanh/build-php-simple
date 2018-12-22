<?php

# init configs
require_once 'configs.php';

//## @improve code
require_once Router::load('routes.php')
        ->direct( Request::uri(), Request::method() );

# required database

# required QueryBuilder

