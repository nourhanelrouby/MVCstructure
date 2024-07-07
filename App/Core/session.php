<?php
namespace MVC\Core;
class git initsession
{
    public function Start()
    {
        @session_start();
    }

    public function Set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function Get($key)
    {
        if (isset($_SESSION[$key])) return $_SESSION[$key];

    }

    public function Stop()
    {
        session_destroy();
    }
}