<?php
/* Smarty version 4.2.1, created on 2022-10-25 16:36:05
  from 'C:\xampp\htdocs\TpeTio\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6357f455e03896_88076550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f6120a4c557843c3e8978555b594d6b61d53353' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeTio\\templates\\header.tpl',
      1 => 1666708564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6357f455e03896_88076550 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <base href="<?php echo BASE_URL;?>
">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/estilos.css">
  <title>Titulo</title>
</head>

<body>

<header>
</header>
<nav>
  <a href='home' class="titulopagina" >Titulo</a>
  
  <p><a class="productos" href='productos'>Productos</a></p>
  <p><a class="armarpc" href='armarpc'>Armar mi PC</a></p>
  <button class="contacto"><a href='contacto'>Contacto</a></button>
</nav><?php }
}
