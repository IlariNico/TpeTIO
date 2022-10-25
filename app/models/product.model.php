<?php

class modeloProducto{
    
    private $db;
    
    public function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=geek_informatica;charset=utf8', 'root', '');
    }

    public function getAll(){
        $query = $this -> db -> prepare("SELECT * FROM productos");
        $query -> execute();
        $productos = $query -> fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
}