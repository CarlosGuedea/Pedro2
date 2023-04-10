<?php
require_once 'vendor/autoload.php';
require 'controllers/loginController.php';
require 'controllers/homeController.php';
require 'controllers/registerController.php';
require 'controllers/ordenesController.php';
require 'controllers/adminController.php';

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', [homeController::class, 'index']);

    $r->addRoute(['GET', 'POST'], '/login', [loginController::class, 'index']);

    $r->addRoute(['GET', 'POST'], '/registro', [registerController::class, 'index']);
    
    $r->addRoute(['GET', 'POST'], '/ordenes', [ordenesController::class, 'index']);

    $r->addRoute(['GET', 'POST'], '/nueva-orden', [ordenesController::class, 'nuevaOrden']);

    $r->addRoute(['GET', 'POST'], '/detalle-orden/{id:\d+}', [ordenesController::class, 'detalleOrden']);

    $r->addRoute(['GET', 'POST'], '/nuevo-orden-detalle/{id:\d+}', [ordenesController::class, 'nuevoDetalleOrden']);

    $r->addRoute(['GET', 'POST'], '/admin', [adminController::class, 'login']);

    $r->addRoute(['GET', 'POST'], '/AdminPanel', [adminController::class, 'panel']);

    $r->addRoute(['GET', 'POST'], '/AdminPanel/ordenes/{pagina:\d+}', [adminController::class, 'panelOrdenes']);

    $r->addRoute(['GET', 'POST'], '/AdminPanel/usuarios/{pagina:\d+}', [adminController::class, 'panelUsuarios']);

    $r->addRoute(['GET', 'POST'], '/admin-orden-detalle/{id:\d+}', [ordenesController::class, 'adminOrdenDetalle']);
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo 'Página no encontrada';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo 'Método no permitido';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        call_user_func_array($handler, $vars);
        break;
}
