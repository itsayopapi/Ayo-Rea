<?php
$request = preg_replace('/\?.*/', '', $_SERVER['REQUEST_URI']); // Remove query strings

// If the request is for an existing file, serve it normally
if (file_exists(__DIR__ . $request . ".php")) {
    require __DIR__ . $request . ".php";
    exit;
}

// Otherwise, serve index.php
require __DIR__ . "/index.php";