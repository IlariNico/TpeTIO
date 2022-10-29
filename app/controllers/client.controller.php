<?php
require_once './app/models/client.model.php';
class controladorCliente{
    private $modelo;

    public function __construct(){
        $this->modelo=new modeloCliente();
    }
    public function guardarCliente(){
        $datos=$_POST;
        $this->modelo->guardarCliente($datos);
        header("Location: " . BASE_URL);
    }

}