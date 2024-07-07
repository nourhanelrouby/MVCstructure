<?php
namespace MVC\Controllers;

use MVC\Core\controller;

use MVC\Models\user;

use GUMP;

use MVC\Core\session;

use MVC\Core\helper;

class homecontroller extends controller
{
    public function __construct()
    {
        $sessvar = new session();
        $sessvar->Start();
    }

    public function index()
    {
        $user = new user();
        $data = $user->getAllUsers();
        $this->View("/home/index", ['title' => 'Home page', 'name' => 'nourhan elrouby', 'data' => $data]);
    }

    public function login()
    {
        $this->View("/home/login", ['title' => 'Login']);
    }

    public function postLogin()
    {
        $rules = ['email' => 'required'];
        $vaildation = GUMP::is_valid($_POST, $rules);

        if ($vaildation == 1) {
            $user = new user();
            $user->getUser($_POST['email'], $_POST['pass']);
            $sessvar = new session();
            $sessvar->Set('user', $user);
            helper::Redirect('user/index');
        }
    }

    public function logOut()
    {
        $sessvar = new session();
        $sessvar->Stop();
    }
}