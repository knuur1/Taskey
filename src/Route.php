<?php

namespace Framework;

class Route
{
    public string $method;

    public string $path;

    public string $returnValue;

    public function __construct(string $method, string $path, string $returnValue)
    {
        $this->method = $method;
        $this->path = $path;
        $this->returnValue = $returnValue;
    }

    public function matches(string $method, string $path): bool
    {
        return $this->method === $method && $this->path === $path;
    }
}
