<?php
/* Smarty version 4.2.1, created on 2022-11-02 23:01:17
  from 'C:\xampp\htdocs\TpeTIOError\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6362e8ad65a773_21068269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e4a1b34a666ba80024b8246fe8c2d17003c68e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeTIOError\\templates\\header.tpl',
      1 => 1667083947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6362e8ad65a773_21068269 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <base href="<?php echo BASE_URL;?>
">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/estilos.css">
  <?php echo '<script'; ?>
 defer src="./js/header.js"><?php echo '</script'; ?>
>
  <title>Titulo</title>
</head>

<body>

  <header>
    <nav>
      <div class="navBar__line"></div>
      <div class="navBar__container">
        <div class="navBar__group1">
          <a href='home' class="titulopagina nav__item">Titulo</a>
          <a class="productos nav__item" href='productos'>Productos</a>
          <a class="armarpc nav__item" href='armarpc'>Armar mi PC</a>
        </div>
        <a href='contacto' class="contacto">Contacto</a>
      </div>
    </nav>
</header><?php }
}
