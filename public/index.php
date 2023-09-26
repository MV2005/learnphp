<?php
session_start();

spl_autoload_register(function ($className){
 $className = substr($className, 4);
 require_once __DIR__ ."/../src/$className.php";
});

//require_once __DIR__ .'/../src/Router.php';

use App\Router;

require __DIR__ . '/../routes.php';
include __DIR__ . '/../helpers.php';

//    var_dump(Router::$routes);

   $router = new Router($_SERVER['REQUEST_URI'], $_SERVER ['REQUEST_METHOD']);
   $match = $router->match();
   if($match){
    if(is_callable($match['action'])){
    call_user_func($match['action']);
   } else if(is_array($match['action'])){
    $class = $match['action'][0]; 
    $controller = new $class();
    $method = $match['action'][1];
    $controller->$method();

   }
} else  {
    echo 404;
   }



// $router = new Router();
// var_dump($router);

// switch ($_SERVER['REQUEST_URI']) {
//    case '/':
//     echo 'Home page';
//     break;
//     case '/about';
//     echo 'About';
//     break;
//     default:
//     echo '404';
//     break;

// }
