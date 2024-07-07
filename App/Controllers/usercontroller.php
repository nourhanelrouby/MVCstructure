<?php
namespace MVC\Controllers;

use MVC\Core\controller;

use MVC\Models\user;

use GUMP;

use MVC\Core\session;
class usercontroller extends controller
{
    public function __construct()
    {
        $sessvariable = new session();
        $sessvariable->Start();
       $userData =  $sessvariable->Get('user');
       if(empty($userData)){
           echo 'Class Not Accessed'; die;
       }
    }

    public function index()
    {
        echo 'USER';
    }
}