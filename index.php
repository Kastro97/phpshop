<?php

$container = require __DIR__ . '/app/bootstrap.php';

if (ENVIRONMENT === 'development'){
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

$dispatcher = \FastRoute\simpleDispatcher(function (\FastRoute\RouteCollector $r){

});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = $dispatcher->dispatch($httpMethod, $uri);

switch ($route[0]) {
    case \FastRoute\Dispatcher::NOT_FOUND:
        echo  "Pagina no encontrada";
        break;
    case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo "Metodo No Permitido";
        break;
    case \FastRoute\Dispatcher::FOUND:
        $controller = $route[1];
        $parameters = $route[2];
        $container->call($controller, $parameters);
        break;

}
