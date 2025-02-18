<?php

$routes = [
    '/' => '/home.php',
    '/about' => 'about',
];

$currentRoute = strtok($_SERVER['REQUEST_URI'], '?');

if (array_key_exists($currentRoute, $routes)) {

    $page = $routes[$currentRoute];

    $filePath = $page . '.php';
    if (file_exists($filePath)) {
        include $filePath;
    } else {
        include_once './404.php';
    }
}
