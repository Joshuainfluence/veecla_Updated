<?php
require_once __DIR__ . "/config/session.php";

// Define your routes
$routes = [
    '/' => 'IndexController@index',
    '/about' => 'AboutController@index',
    '/contact' => 'ContactController@index',
    '/cart' => 'CartController@index',
    '/login' => 'LoginController@index',
    // Add more routes as needed
];

// Get the current request URI
$request_uri = $_SERVER['REQUEST_URI'];

// Remove query string from URI
$request_uri = strtok($request_uri, '?');

// Route the request
if (array_key_exists($request_uri, $routes)) {
    // Extract controller and action from route
    $parts = explode('@', $routes[$request_uri]);
    $controllerName = $parts[0];
    $action = $parts[1];

    // Include the controller file
    require_once __DIR__ . '/public/' . $controllerName . '.php';

    // Create an instance of the controller
    $controller = new $controllerName();

    // Call the action method
    $controller->$action();
} else {
    // Handle 404 Not Found
    header("HTTP/1.0 404 Not Found");
    echo '404 Not Found';
}
?>
