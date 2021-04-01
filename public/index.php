<?php

require_once __DIR__.'/../vendor/autoload.php';

//use Framework\Router;
use Bramus\Router\Router;

// Create Router instance
$router = new Router();
var_dump("test");
var_dump("test");
var_dump("lol");
var_dump("test5");

$router->get('/account/login', '\App\Controller\UserController@showLogin');
$router->post('/account/login', '\App\Controller\UserController@showLogin');
$router->get('/account/registration', '\App\Controller\UserController@showRegistration');
$router->post('/account/registration', '\App\Controller\UserController@showRegistration');
$router->get('/account/disconnect', '\App\Controller\UserController@disconnectEvent');

// $router->get('/test/{url}', '\App\Controller\UserController@testEvent');
var_dump("test");
$router->run();
var_dump("raeraeraerar");




var_dump('TEST RINOo');
