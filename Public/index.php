<?php

session_start();
require __DIR__ . "/../App/Core/Router/router.php";


// 2. Include core classes globally
require_once __DIR__ . '/../app/Core/Auth.php';

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class) . '.php';
    if (file_exists(__DIR__ . '/../' . $path)) {
        require_once __DIR__ . '/../' . $path;
    }
});

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

route($uri);

