<?php
/* Smarty version 4.2.1, created on 2022-10-24 17:39:03
  from 'C:\xampp\htdocs\proyect\TpeTIO\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6356b1971050e1_71421227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bffb9d8c83106fb9e9d5d067d9e483f131facf1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\TpeTIO\\templates\\home.tpl',
      1 => 1666579592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6356b1971050e1_71421227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <h1> Todo lo que buscas, a un solo click<h1>
    <img src="">
</div>

<div>
    <h3>Productos</h3>
    <a href="productos">Ver todos los productos</a>
    <div>
        <img src="">
    </div>
</div>

<div>
    <h2 class="tituloseccion">Los mas vendidos</h2>
    <div>
        <img src="">
    </div>
    <div>
        <div>
            <a href="categoria1">Categoria 1</a>
            <a href="categoria2">Categoria 2</a>
            <a href="categoria3">Categoria 3</a>
        </div>
        <div>
            <img src="">
        </div>
    </div>
</div>

<div>
    <h1>Nuestros servicios</h1>
    <div>
        <img src="">
        <h2>Armamos tu PC con los mejores</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta dictum metus, non bibendum
        lorem placerat at. Nulla ultricies venenatis enim, sit amet lacinia neque pharetra eget.
        Aenean in posuere nisl, non egestas massa. Fusce sed euismod mauris. Nunc malesuada
        magna ac dolo aliquam, aliquet tincidunt ex dictum. Fusce non risus ut risus porttitor interdum. 
        Phasellus hendrerit elit vitae tellus scelerisque, eget finibus ex gravida. Aliquam luctus justo
        posuere tristique eleifend. In sit amet aliquam velit.</p>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
