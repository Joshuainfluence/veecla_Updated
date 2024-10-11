<?php 
// require_once 'routes.php';
// Capture the URL after the domain (localhost/veecla_updated/veecla)
$url = isset($_GET['id']) ? $_GET['id'] : '';

// Split the URL into parts
$url = explode('/', rtrim($url, '/'));

// Basic Routing Logic
switch ($url[0]) {
    case 'profile':
        require_once __DIR__ . '/profile.php';
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

    // Add other routes/pages here

    default:
        // Default page or 404
        require_once __DIR__ . '/404.php';
        break;
}
