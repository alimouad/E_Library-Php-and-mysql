<?php

// Start session
session_start();

define('BASE_PATH', dirname(__DIR__));
spl_autoload_register(function ($class) {
    $classPath = str_replace('\\', '/', $class);
    $file = BASE_PATH . '/' . $classPath . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

require_once BASE_PATH . '/App/Core/Router/router.php';

// Get current URI and route
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Route the request
route($uri);

