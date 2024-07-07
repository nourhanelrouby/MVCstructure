<?php
namespace MVC\Core;
class app
{
    private $controller = "homecontroller";
    private $method = "index";
    private $params = [];

    public function __construct()
    {
        $this->URL();
        $this->Render();
    }

    private function URL()
    {
        if (!empty($_SERVER["QUERY_STRING"])) {
            $url = explode('/', $_SERVER["QUERY_STRING"]);
            // Controller
            (isset($url[0])) ? $this->controller = $url[0] . "controller" : "homecontroller";

            // Method
            (isset($url[1])) ? $this->method = $url[1] : "index";
            unset($url[0], $url[1]);

            // Params
            $this->params = array_values($url);
        } else {
            $this->controller = "homecontroller";
            $this->method = "index";
            $this->params = [];
        }

    }

    private function Render()
    {
        $controller = "MVC\Controllers\\" . $this->controller;
        if (class_exists($controller)) {
            $controller = new $controller;
            if (method_exists($controller, $this->method)) {
                // to run function body
                call_user_func_array([$controller, $this->method], $this->params);
            } else {
                echo "Method not exist";
            }
        } else {
            echo "Class not exist";
        }
    }
}