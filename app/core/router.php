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
        $method = $_SERVER['REQUEST_METHOD'];  // Get the request method (GET, POST)

        // Normalize the URI (remove query strings)
        $uri = strtok($uri, '?');

        if (isset(self::$routes[$method][$uri])) {
            $controllerAction = self::$routes[$method][$uri];
            list($controller, $action) = explode('@', $controllerAction);

            // Ensure the controller class exists
            $controller = "App\\Controllers\\" . $controller;
            if (class_exists($controller)) {
                $controllerInstance = new $controller();
                
                // Ensure the method exists
                if (method_exists($controllerInstance, $action)) {
                    $controllerInstance->{$action}();
                } else {
                    http_response_code(404);
                    echo "404 - Method not found";
                }
            } else {
                http_response_code(404);
                echo "404 - Controller not found";
            }
        } else {
            http_response_code(404);
            echo "404 - Route not found";
        }
    }
}
