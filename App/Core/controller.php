<?php
namespace MVC\Core;

class controller
{
    public function View($path, $parms)
    {
        extract($parms);
        require_once(VIEWS . $path . '.php');
    }

}