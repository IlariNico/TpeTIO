<?php
/* Smarty version 4.2.1, created on 2022-10-29 09:06:07
  from 'C:\xampp\htdocs\TpeTIO\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635cd0df131686_79512039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f97f50a4f558a309d8ea4c25ada0c88ff84a30d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeTIO\\templates\\home.tpl',
      1 => 1667027152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_635cd0df131686_79512039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="iniciohome">
    <div>
        <h1 class="frasehome"><span id="frasehomer1">Todo lo que buscás, </span><span class="frasehomer2">a un solo
                click.</span></h1>
    </div>
    <img src="imagenes/homepc.png">
</div>

<div class="productosylink">
    <h3>Productos</h3>
    <a href="productos">Ver todos los productos</a>
</div>


<h3 class="tituloseccion">Los más vendidos</h3>

<div>
    <div class="titulocategorias">
        <a class="categoria" href="">Categoria 1</a>
        <a class="categoria" href="">Categoria 2</a>
        <a class="categoria" href="">Categoria 3</a>
        <a class="categoria" href="">Categoria 4</a>
    </div>
    <div class="contenidocategoria"></div>
</div>

<div>
    <div class="tituloservicios">
        <h3 class="tituloservicios__title">Nuestros Servicios</h3>
        <div class="tituloservicios__line"></div>
    </div>

    <div class="contenidoservicios">
        <img src="imagenes/armarpc.png">
        <div class="descripcionservicios">
            <h4>Armamos tu PC con los mejores</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta dictum metus, non bibendum
                lorem placerat at. Nulla ultricies venenatis enim, sit amet lacinia neque pharetra eget.
                Aenean in posuere nisl, non egestas massa. Fusce sed euismod mauris. Nunc malesuada
                magna ac dolo aliquam, aliquet tincidunt ex dictum. Fusce non risus ut risus porttitor interdum.
                Phasellus hendrerit elit vitae tellus scelerisque, eget finibus ex gravida. Aliquam luctus justo
                posuere tristique eleifend. In sit amet aliquam velit.</p>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="./js/home.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
