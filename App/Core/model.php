<?php
namespace MVC\Core;
use Dcblogdev\PdoWrapper\Database as Database;

class model{
    public function DBconnection()
    {
        $options = [
            // Required
            'username' => USERNAME,
            'database' => DATABASE,
            // Optional
            'password' => PASSWORD,
            'host' => SERVER,
            'type' => TYPE,
            'charset' => CHARSET,
            'port' => PORT
        ];
        try {
            // Check for connection
//            echo "Connected";

            return $db = new Database($options);

        } catch (PDOException $e) {
            echo 'Connection Failed ' . $e->getMessage();
        }
    }
}