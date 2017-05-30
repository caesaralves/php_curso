<?php

$routes= explode('/', $_SERVER['REQUEST_URI']);
$fileName = $routes[1] == '' ? 'welcome.php': $routes[1].'.php';

if(file_exists(__DIR__."/".$fileName)){
    require($fileName);
} else {
    echo 'page not found';
}