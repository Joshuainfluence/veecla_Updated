<?php


// $routes = [
//     '/' => 'home.php',
//     'profile' => 'profile.php',
//     '/settings' => 'usersetting.php',
//     '/products' => 'products.php',
//     '/privacy' => 'privacy.php',
//     '/terms' => 'terms.php',
// ];

// $request = $_SERVER['REQUEST_URI'];

// if (array_key_exists($request, $routes)) {
//     require __DIR__ . '/' . $routes[$request];
// } else {

//     http_response_code(404);
//     require __DIR__ . '/404.php'; 
// }

// Capture the URL after the domain (localhost/veecla_updated/veecla)
$url = isset($_GET['id']) ? $_GET['id'] : '';

// Split the URL into parts
$url = explode('/', rtrim($url, '/'));

// Basic Routing Logic
switch ($url[0]) {
    case 'profile':
        require_once __DIR__ . '/profile.php';
        break;

     case '/':
        require_once __DIR__ . '/index.php';
        break;

    case 'home':
        require_once __DIR__ . '/home.php';
        break;

    case 'about':
        require_once __DIR__ . '/about.php';
        break;

    case 'contact':
        require_once __DIR__ . '/contact.php';
        break;
        
    case 'search':
        require_once __DIR__ . '/search.php';
        break;
     
    case 'cart':
        require_once __DIR__. '/cart.php';
        break;

    case 'products':
        require_once __DIR__. '/products.php';
        break;

    case 'single-product':
        require_once __DIR__. "/single-product.php";
        break;

    case 'usersetting':
        require_once __DIR__. "/usersetting.php";
        break;

    case 'thankyou':
        require_once __DIR__. "/thankyou.php";
        break;

    case 'login':
        require_once __DIR__. "/login.php";
        break;

    case 'signup':
        require_once __DIR__. "/signup.php";
        break;

    case 'logout':
        require_once __DIR__. "/config/logout.php";
        break;


    // Add other routes/pages here

    default:
        // Default page or 404
        require_once __DIR__ . '/404.php';
        break;
}