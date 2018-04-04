<?php

namespace Example\Controller;
use Psr\Container\ContainerInterface;

/**
 * Class BaseController
 * @package Example\Controller
 */
class BaseController
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function __get($id)
    {
        return $this->container->get($id);
    }
}