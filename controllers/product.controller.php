<?php
require_once './app/models/product.model.php';
require_once './app/views/product.view.php';

class controladorProducto{
    private $modelo;
    private $vista;
    
    public function __construct(){
        $this->modelo=new modeloProducto();
        $this->vista=new vistaProducto();
        $this->modeloCat=new modeloCategoria();
        
    }
}