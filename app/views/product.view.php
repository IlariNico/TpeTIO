<?php
require_once ('libs/smarty-4.2.1/libs/Smarty.class.php');
class vistaProducto{
    private $smarty;
    
    public function __construct(){
        $this->smarty = new Smarty();    
    }

    public function showHome($productos){
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('home.tpl');
    }

    public function showAll($productos){
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('productos.tpl');
    }

    public function showOne($producto){
        $this->smarty->assign('producto', $producto);
        $this->smarty->display('productosUnico.tpl');
    }

    public function showContacto(){
        $this->smarty->display('contacto.tpl');
    }
}