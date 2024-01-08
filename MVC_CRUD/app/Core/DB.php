<?php
namespace App\Core;

use PDO;

class DB
{

    protected $db;

    public function connect()
    {
        $database = new PDO(
            'mysql:host=' . $_ENV['HOST'] . ';dbname=' . $_ENV['DB_NAME'],
            $_ENV['USER'],
            $_ENV['PASSWORD'],
            []);

        if ($database) {
            $this->db = $database;
            return $this->db;
        } else {
            echo 'database errorrrrr!!!!!!';
        }
    }
}
