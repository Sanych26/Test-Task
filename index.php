<?php
require_once(getcwd().'/controllers/ApiController.php');
$routes = [];
function on($regex, $cb) {
    global $routes;
    $routes[$regex] = $cb;
}

function dispatch($uri) {
    global $routes;
    foreach ($routes as $regex => $cb) {
        if (preg_match($regex, $uri, $matches)) {
            array_shift($matches);
            return call_user_func_array($cb, $matches);
        }
    }
    header("HTTP/1.0 404 Not Found");
    echo 'Page Not Found';
    exit;
}

on('#^/$#', function() {
    include('views/contact.php');
});

on('#^/orders/?$#', function() {
    include('views/orders.php');
});

on('#^/get-orders/?$#', function() {
    ApiController::getOrders();
});

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
dispatch($uri);
?>
