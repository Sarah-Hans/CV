<?php

$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);

$routes = [
    'contact' => 'pages/contact.php',
    'hobbyelevage' => 'pages/hobby-elevage.php',
    '404' => 'pages/404.php',
    'accueil' => 'pages/accueil.php'
];

if (isset($page)) {
    if (array_key_exists($page, $routes)) {
        require $routes[$page];
    } else {
        require $routes['404'];
    }
} else {
    require $routes['accueil'];
}