<?php

namespace App\Controllers;

use Framework\Response;

class TaskController
{
    public function index(): Response
    {
        $response = new Response();
        $response->body = "Tasks";
        return $response;
    }

    public function create(): Response
    {
        $response = new Response();
        $response->body = "Create task";
        return $response;
    }
}
