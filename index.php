<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
# required bootstrap

require_once 'vendor/autoload.php'; // apply composer :: autoload classmap
require_once 'core/bootstrap.php';


# defined routes
//$routes = [
//    '/'             => 'controllers/home.php',
//    '/about'        => 'controllers/about.php',
//    '/service'      => 'controllers/service.php',
//];