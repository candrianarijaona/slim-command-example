<?php
// Routes

use Example\Controller\HomeController;

$app->map(['POST', 'GET'], '/', HomeController::class . ':indexAction')
    ->setName('homepage')
;

$app->get('/hello/{name}', function ($request, $response, $args) {
    $response->write("Hello, " . $args['name']);
    return $response;
});
