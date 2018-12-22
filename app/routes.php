<?php

$router->get('','controllers/home.php');
$router->get('about','controllers/about.php');
$router->get('service','controllers/service.php');

$router->post('names', 'controllers/add-name.php');

