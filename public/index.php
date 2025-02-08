<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Core\Router;

Router::get('/', 'HomeController@index');  // Home page
Router::get('/login', 'UserController@showLogin');  // Login page
Router::get('/registre', 'UserController@showRegistre');  // Register page
Router::post('/registre', 'UserController@registerUser');  // Handle registration form submission
Router::post('/login', 'UserController@loginUser');  // Handle registration form submission


$requestUri = $_SERVER['REQUEST_URI'];

Router::dispatch($requestUri);
