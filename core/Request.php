<?php

namespace App\core;

class Request
{

    public function getPath()
    {
        $path = $_SERVER['PATH_INFO'] ?? '/';

        return $path;
    }

    public function getMethod()
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? false;
        return $method;
    }

    public function getData()
    {
        $data = [];

        if($_SERVER["REQUEST_METHOD"] === "GET")
        {
            foreach ($_GET as $key => $value) {
                $data[$key] = $value;         
            }
        }

        if($_SERVER["REQUEST_METHOD"] === "POST")
        {
            foreach ($_POST as $key => $value) {
                $data[$key] = $value;         
            }
        }

        return $data;
    }
}