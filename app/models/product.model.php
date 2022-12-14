<?php

class modeloProducto{
    
    private $db;
    
    public function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=geekinformatica;charset=utf8', 'root', '');
    }

    public function getAll(){
        $query = $this -> db -> prepare("SELECT * FROM productos");
        $query -> execute();
        $productos = $query -> fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
    public function getOne($id){
        $query = $this -> db -> prepare("SELECT * FROM productos WHERE id=?");
        $query -> execute([$id]);
        $producto = $query -> fetch(PDO::FETCH_OBJ);
        return $producto;
    }
}