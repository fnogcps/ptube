<?php

declare(strict_types=1);

namespace fnogcps\Ptube;

require __DIR__ . '/../vendor/autoload.php';

use fnogcps\Ptube\UserController;

$router = new \Bramus\Router\Router();

$router->setNamespace('fnogcps\Ptube\Controllers');

// $router->get('/c/([a-z0-9-]+)', 'UserController@createUser');
// $router->get('/d/([a-z0-9-]+)', 'UserController@deleteUser');
// $router->get('/g/([a-z0-9-]+)', 'UserController@getUser');

$router->run();
