<?php

spl_autoload_register(function ($className){
 var_dump($className);
 require_once __DIR__ ."/../src/$className.php";
});

//require_once __DIR__ .'/../src/Router.php';


$router = new Router();
var_dump($router);

switch ($_SERVER['REQUEST_URI']) {
   case '/':
    echo 'Home page';
    break;
    case '/about';
    echo 'About';
    break;
    default:
    echo '404';
    break;

}
