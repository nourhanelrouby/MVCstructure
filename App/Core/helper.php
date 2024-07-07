<?php
namespace MVC\Core;
class helper{
    public static function Redirect($path){
        header(DOMAIN_NAME.$path);
    }
}