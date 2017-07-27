<?php
require_once 'Routes.php';

$routes= explode('/', $_SERVER['REQUEST_URI']);
$route = '/'.$routes[1];

if($route == '/')
    require(Routes::getDefaultRoute());

else if(Routes::routeExists($route))
    require(Routes::getRoute($route));

else
    echo '404 page not found';