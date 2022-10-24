<?php
/* Smarty version 4.2.1, created on 2022-10-24 16:58:17
  from 'C:\xampp\htdocs\proyect\TpeTIO\templates\contactos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6356a809dca3a6_83686318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3654ad27fa779f1bc7e8208e7e1f80c18d19f56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\TpeTIO\\templates\\contactos.tpl',
      1 => 1666615496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6356a809dca3a6_83686318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="tituloseccion">Contactenos</h2>
<h3>Rellene nuestro formulario o llamenos por telefono</h3>

<div class="paginacontacto">
    <form>
        <div class="divformulario">
            <label for="nombre">Ingrese su nombre completo</label>
            <input type="text" required name="nombre" placeholder="Nombre">
        </div>
        <div class="divformulario">
            <label for="apellido">Ingrese su apellido</label>
            <input type="text" required name="apellido" placeholder="Apellido">
        </div>
        <div class="divformulario">
            <label for="email">Ingrese su email</label>
            <input type="mail" required name="email" placeholder="Email">
        </div>
        <div class="divformulario">
            <label for="mensaje">Mensaje</label>
            <input class="inputmsj" type="text" required name="mensaje">
        </div>
    </form>

    <div class="infocontacto">
        <div>
            <h4>Conecte con nosotros</h4>
            <p>Ponganse en contacto con nosotros y nos aseguraremos de responderle lo antes posible</p>
        </div>
        <div class="divinfocontacto">
            <img src="">
            <p>2494-000000</p>
        <div>
        <div class="divinfocontacto">
            <img src="">
            <p>trabajo@gmail.com</p>
        <div>
        <div class="divinfocontacto">
            <img src="">
            <p>Ubicacion</p>
        <div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
