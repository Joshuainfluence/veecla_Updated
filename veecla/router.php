<?php
class Router
{
    private $routes = [];

    public function addRoute($url, $file)
    {
        $this->routes[$url] = $file;
    }

    public function route($url)
    {
        if (array_key_exists($url, $this->routes)) {
            require_once $this->routes[$url];
        } else {
            // Handle 404 Not Found
            header("HTTP/1.0 404 Not Found");
            require_once '404.php';
        }
    }
}

// Usage
$router = new Router();

// Add routes
$router->addRoute('/home', 'home.php');
$router->addRoute('/profile', 'profile.php');
$router->addRoute('/products', 'products.php');
$router->addRoute('/search', 'search.php');
$router->addRoute('/single-product', 'single-product.php');
$router->addRoute('/usersetting', 'usersetting.php');

// Get the current URL path
$url = $_SERVER['REQUEST_URI'];
$url = strtok($url, '?'); // Remove query string if present

// Route the request
$router->route($url);
?>