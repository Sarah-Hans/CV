<?php
//mise en buffer
ob_start();
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);

//tableau de routes
$routes = [
    'contact' => 'pages/contact.php',
    'hobbyelevage' => 'pages/hobby-elevage.php',
    '404' => 'pages/404.php',
    'accueil' => 'pages/accueil.php'
];

//Condition qui détermine le contenu à afficher en fonction des paramètres $page demandés (ou non)
if (isset($page)) {
    if (array_key_exists($page, $routes)) {
        require $routes[$page];
    } else {
        require $routes['404'];
    }
} else {
    require $routes['accueil'];
}
//affichage de ce qui était en buffer via la variable $render
$render = ob_get_contents();
ob_end_clean();
echo $render;