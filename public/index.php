<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteContext;

use fnogcps\Ptube\Controllers\UserController;

$app = AppFactory::create();

$app->post('/create', static function (Request $req, Response $res) {
    (new UserController())->createUser($req->getParsedBody());
    return $res->withHeader('Content-Type', 'application/json');
});

$app->post('/login', static function (Request $req, Response $res) {
    (new UserController())->getUser($req->getParsedBody());
    return $res->withHeader('Content-Type', 'application/json');
});

$app->run();
