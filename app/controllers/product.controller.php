<?php
require_once './app/models/product.model.php';
require_once './app/views/product.view.php';

class controladorProducto{
    private $modelo;
    private $vista;
    
    public function __construct(){
        $this->modelo=new modeloProducto();
        $this->vista=new vistaProducto();
    }

    public function showHome(){
        $productos=$this->modelo->getAll();
        $this->vista->showHome($productos);
    }

    public function getAll(){
        $productos=$this->modelo->getAll();
        $this->vista->showAll($productos);
    }

    public function showContacto(){
        $this->vista->showContacto();
    }
}