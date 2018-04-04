<?php
// Routes

use Example\Controller\HomeController;

$app->any('/', HomeController::class . ':indexAction')
    ->setName('homepage')
;
