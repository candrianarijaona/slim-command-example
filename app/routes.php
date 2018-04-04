<?php
// Routes

use Example\Controller\HomeController;

$app->map(['POST', 'GET'], '/', HomeController::class . ':indexAction')
    ->setName('homepage')
;
