<?php

function route($uri) {
    
    $routes = [
        '/'                => ['UserController', 'index'],
        '/about'           => ['UserController', 'about'],
        '/account'         => ['UserController', 'account'],
        '/login'           => ['AuthController', 'login'],
        '/register'        => ['AuthController', 'register'],
        '/logout'          => ['AuthController', 'logout'],
        '/adminhome'            => ['AdminController', 'dashboard'],
        '/admin/books'           => ['AdminController', 'books'],
        '/admin/members'         => ['AdminController', 'members']
    ];

    if (isset($routes[$uri])) {
        [$controller, $method] = $routes[$uri];
        $controllerName = "App\\Controllers\\{$controller}";

        if (class_exists($controllerName)) {
            (new $controllerName())->$method();
        } else {
            die("Controller not found: {$controller}");
        }
    } else {
        http_response_code(404);
        require __DIR__ . '/../../Views/404.php';
    }
}