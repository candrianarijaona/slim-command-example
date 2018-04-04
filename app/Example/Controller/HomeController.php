<?php

namespace Example\Controller;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Class HomeController
 * @package Example\Controller
 */
class HomeController extends BaseController
{
    /**
     * Display home page
     *
     * @param ServerRequestInterface $request   The PSR-7 request object
     * @param ResponseInterface $response       The PSR-7 response object
     * @param array $args                       A list of arguments
     *
     * @return ResponseInterface
     */
    public function indexAction(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        foreach ($this->router->getRoutes() as $route) {
            dump($route);
        }
        return $response;
    }
}
