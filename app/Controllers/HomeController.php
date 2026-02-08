<?php

namespace App\Controllers;

use Framework\Response;

class HomeController
{
    public function index(): Response
    {
        $response = new Response();
        $response->body = "Welcome to Taskey!";
        return $response;
    }

    public function about(): Response
    {
        $response = new Response();
        $response->body = "About Taskey";
        return $response;
    }
}
