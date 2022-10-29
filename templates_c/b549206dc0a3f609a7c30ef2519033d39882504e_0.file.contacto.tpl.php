<?php
/* Smarty version 4.2.1, created on 2022-10-30 00:38:53
  from 'C:\xampp\htdocs\TpeTio\templates\contacto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635dab7dd001d2_00625955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b549206dc0a3f609a7c30ef2519033d39882504e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeTio\\templates\\contacto.tpl',
      1 => 1667082597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_635dab7dd001d2_00625955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2 class="tituloseccion">Contactenos</h2>
<h3 class="titulopagcontacto">Rellene nuestro formulario o llamenos por telefono:</h3>
<div class=paginacontacto>
        <form action="guardarcliente" class="formmensaje" method="POST">
            <div class="divformulario">
                <label for="nombre">Ingrese su nombre completo:</label>
                <input type="text" required name="nombre" placeholder="Nombre">
            </div>
            <div class="divformulario">
                <label for="apellido">Ingrese su apellido:</label>
                <input type="apellido" required name="apellido" placeholder="Apellido">
            </div>
            <div class="divformulario">
                <label for="email">Ingrese su email:</label>
                <input type="email" required name="email" placeholder="Email">
            </div>
            <div class="divformulario">
                <label for="mensaje">Mensaje</label>
                <input class="inputmsj" type="text" required name="mensaje">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    <div class="infocontacto">
        <div>
            <h3>Conectate con nosotros</h3>
            <p>Pongase en contacto con nosotros y nos aseguramos de responderle lo antes posible.</p>
        </div>
        <div>
            <img class="imagenespagcontacto" src="imagenes/telefonocontacto.png">
            <p>2494-000000</p>
        </div>
        <div>
            <img class="imagenespagcontacto" src="imagenes/mailcontacto.png">
            <p>trabajo@gmail.com</p>
        </div>
        <div>
            <img class="imagenespagcontacto" src="imagenes/ubicacioncontacto.png">
            <p>ubicacion</p>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
