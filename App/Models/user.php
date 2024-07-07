<?php
namespace MVC\Models;
use MVC\Core\model;

class user extends model
{
    public function getAllUsers()
    {
        $query = "SELECT * FROM user";
        $data = $this->DBconnection()->rows($query);
        return $data;
    }

    public function getUser($email, $pass)
    {
        $query = "SELECT * FROM user WHERE user_email = ?  && user_pass = ?";
        $data = $this->DBconnection()->row($query, [$email, $pass]);
        return $data;
    }
}