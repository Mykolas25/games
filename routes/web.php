<?php

require_once __DIR__ . "/../core/Router.php";

$router = new Router();
//Home routes
$router->get('/', ['/app/Controllers/HomeController', 'index']);
//Game routes
$router->get('/game', ['/app/Controllers/GamesController', 'index']);
$router->get('/game/{id}', ['/app/Controllers/GamesController', 'show']);
$router->get('/game/create', ['/app/Controllers/GamesController', 'create']);
$router->get('/game/{id}/edit', ['/app/Controllers/GamesController', 'edit']);
$router->post('/game/store', ['/app/Controllers/GamesController', 'store']);
$router->put('/game/{id}', ['/app/Controllers/GamesController', 'update']);
$router->delete('/game/{id}', ['/app/Controllers/GamesController', 'delete']);
//User routes
$router->get('/user', ['/app/Controllers/UsersController', 'index']);
$router->get('/user/{id}', ['/app/Controllers/UsersController', 'show']);
$router->get('/user/create', ['/app/Controllers/UsersController', 'create']);
$router->get('/user/{id}/edit', ['/app/Controllers/UsersController', 'edit']);
$router->post('/user/store', ['/app/Controllers/UsersController', 'store']);
$router->put('/user/{id}', ['/app/Controllers/UsersController', 'update']);
$router->delete('/user/{id}', ['/app/Controllers/UsersController', 'delete']);
//Authentication routes
$router->get('/logout', ['/app/Controllers/Auth/AuthController', 'logout']);
$router->get('/login', ['/app/Controllers/Auth/AuthController', 'loginForm']);
$router->post('/login', ['/app/Controllers/Auth/AuthController', 'login']);


$router->resolve();