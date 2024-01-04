<?php

require_once LIB.'DB/MysqliDb.php';

class DB{

    protected $db;

    public function connect(){
        $database = new MysqliDb(HOST, USER, PASSWORD, DB_NAME);
        
        if($database){
            $this->db = $database;
            return $this->db;
        }
        else{
            echo 'database errorrrrr!!!!!!';
        }
    }
}