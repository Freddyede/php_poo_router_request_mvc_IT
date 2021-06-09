<?php

namespace Core\Router;

class Router
{
    private Request $request;

    private static array $routes = [];

    public function __construct()
    {
        $this->request = new Request();
    }

    public static function get($uri, $controller)
    {
        // compact("uri", "controller") => ['uri' => $uri, 'controller' => $controller]
        self::$routes['GET'][] = compact("uri", "controller");
        /**
         * [
         *    'GET' => [
         *         ['uri' => $uri, 'controller' => $controller],
         *         ['uri' => $uri, 'controller' => $controller],
         *         ['uri' => $uri, 'controller' => $controller],
         *         ['uri' => $uri, 'controller' => $controller],
         *         ['uri' => $uri, 'controller' => $controller],
         *    ],
         *    'POST' => [
         *         ['uri' => $uri, 'controller' => $controller]
         *         ['uri' => $uri, 'controller' => $controller]
         *         ['uri' => $uri, 'controller' => $controller]
         *         ['uri' => $uri, 'controller' => $controller]
         *         ['uri' => $uri, 'controller' => $controller]
         *    ]
         * ]
         */
    }

    public function run()
    {
        if (array_key_exists($this->request->getMethod(), self::$routes)) {
            $this->handleRoute(self::$routes[$this->request->getMethod()]);
        }

        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    }

    public function handleRoute($routes)
    {
        foreach ($routes as $route) {
            // /animals => #^/animals$#
            $regex = '#^' . $route . '$#';
            preg_match_all($regex, $this->request->getUri(), $matches, PREG_SET_ORDER);
        }
    }
}
