<?php

function route($uri)
{

    $routes = [
        '/'                      => ['ReaderController', 'index'],
        '/about'                 => ['ReaderController', 'about'],
        '/borrow'                => ['ReaderController', 'borrow'],
        '/history'                => ['ReaderController', 'history'],
        '/profile'                => ['ReaderController', 'profile'],
        '/return'                 => ['ReaderController', 'return'],
        '/login'                 => ['AuthController', 'login'],
        '/register'              => ['AuthController', 'register'],
        '/logout'                => ['AuthController', 'logout'],
        '/adminhome'             => ['AdminController', 'dashboard'],
        '/admin/books'           => ['AdminController', 'books'],
        '/admin/members'         => ['AdminController', 'members'],
        '/admin/members/delete'  => ['AdminController', 'deleteMembers'],
        '/admin/books/delete'    => ['AdminController', 'deleteBook'],
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
        require __DIR__ . '/../../Views/404/404.php';
    }
}
