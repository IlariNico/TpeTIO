<?php
class modeloCliente{
    
    private $db;
    
    public function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=geekinformatica;charset=utf8', 'root', '');
    }
    
    

    public function guardarcliente($datos){
        $consulta=$this->db->prepare("INSERT INTO `cliente`(`nombre`,`apellido`,`email`, `mensaje`) VALUES (?,?,?,?)");
        $consulta->execute([$datos['nombre'],$datos['apellido'],$datos['email'],$datos['mensaje']]);
    }

}