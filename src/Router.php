<?php

namespace Framework;

class Router
{
    /** @var array<Route>  */
    public array $routes = [];

    public function __construct()
    {
    }

    public function dispatch(Request $request): Response
    {
        $response = null;

        foreach ($this->routes as $route) {
            if ($route->matches($request->method, $request->path)) {
                $callback = $route->callback;
                $response = $callback();
                break;
            }
        }

        if ($response !== null) {
            return $response;
        }

        return new Response('Not Found', 404);
    }

    public function addRoute(string $method, string $path, callable $callback): void
    {
        $route = new Route($method, $path, $callback);

        // array_push($this->routes, $route);
        $this->routes[] = $route;
    }
}
