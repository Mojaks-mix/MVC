<?php

class Product extends DB{
    private $table = 'products';
    private $conn;

    public function __construct(){
        $this->conn = ($this->connect());
    }

    public function getAllProducts(){
        return $this->conn->get($this->table);
    }

    public function addProduct(array $data){
        return $this->conn->insert($this->table,$data);
    }

    public function deleteProduct($id)
    {
        $db = $this->conn->where('id',$id);
        return $db->delete($this->table);
    }

    public function getProduct($id){
       $product = $this->conn->where('id',$id);
       return $product->getOne($this->table);
    }

    public function updateProduct($id,$data)
    {
        $product = $this->db->where('id', $id);
        return $product->update($this->table,$data);
    }
}