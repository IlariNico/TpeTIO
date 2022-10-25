<?php
/* Smarty version 4.2.1, created on 2022-10-25 16:29:09
  from 'C:\xampp\htdocs\TpeTio\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6357f2b5b9e3f1_01379101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd95482e23a7069165997adcf2feac7aa162bb938' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeTio\\templates\\home.tpl',
      1 => 1666706931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6357f2b5b9e3f1_01379101 (Smarty_Internal_Template $_smarty_tpl) {
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
