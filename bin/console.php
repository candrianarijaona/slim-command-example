#!/usr/bin/env php
<?php

require __DIR__ . '/../bootstrap.php';

use Candrianarijaona\Command\RouteCommand;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new RouteCommand($container->get('router')));

$application->run();
