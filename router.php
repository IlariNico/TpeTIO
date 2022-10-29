<?php
require_once './app/controllers/product.controller.php';
require_once './app/controllers/client.controller.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; 
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}



$controladorProducto = new controladorProducto();
$controladorCliente = new controladorCliente();

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $controladorProducto->showHome();
        break;
    case'productos':
        $controladorProducto->getAll();
        break;
    case'contacto':
        $controladorProducto-> showContacto();
        break;
    case'guardarcliente':
        $controladorCliente->guardarcliente();
        break;    
    default:
        echo "404 not found";
        break;
}

?>