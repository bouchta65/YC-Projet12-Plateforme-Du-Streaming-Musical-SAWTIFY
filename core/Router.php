<?php

namespace Core;

class Router {
    protected static array $routes = [];

    // Define a GET route
    public static function get($uri, $controller) {
        self::$routes['GET'][$uri] = $controller;
    }

    // Define a POST route
    public static function post($uri, $controller) {
        self::$routes['POST'][$uri] = $controller;
    }

    // Dispatch the request
    public static function dispatch($uri) {
        $method = $_SERVER['REQUEST_METHOD'];  // GET or POST

        // Normalize URI (remove query strings)
        $uri = strtok($uri, '?');

        // Check if the route exists before accessing it
        if (!isset(self::$routes[$method][$uri])) {
            http_response_code(404);
            echo "404 - Route not found";
            return;
        }

        $controllerAction = self::$routes[$method][$uri];

        // Ensure $controllerAction is a valid string before using explode
        if (!is_string($controllerAction) || !str_contains($controllerAction, '@')) {
            http_response_code(500);
            echo "500 - Invalid controller action";
            return;
        }

        list($controller, $action) = explode('@', $controllerAction);

        // Ensure the controller class exists
        $controller = "App\\Controllers\\" . $controller;
        if (!class_exists($controller)) {
            http_response_code(404);
            echo "404 - Controller not found: $controller";
            return;
        }

        $controllerInstance = new $controller();

        // Ensure the method exists
        if (!method_exists($controllerInstance, $action)) {
            http_response_code(404);
            echo "404 - Method '$action' not found in $controller";
            return;
        }

        $controllerInstance->{$action}();
    }
}
