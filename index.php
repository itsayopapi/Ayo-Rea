<?php
$request = trim($_GET['url'] ?? '', '/'); // Get the clean URL
$viewDir = __DIR__ . '/NewChanges/views/'; // Path to views

switch ($request) {
    case '':
    case 'home':
        require $viewDir . 'home.php';
        break;
    
    case 'shared-hosting':
        require $viewDir . 'shared-hosting.php';
        break;
    
    default:
        http_response_code(404);
        require $viewDir . '404.php';
}