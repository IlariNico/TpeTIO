<?php
/* Smarty version 4.2.1, created on 2022-11-05 01:26:43
  from 'C:\xampp\htdocs\proyect\TpeTIO\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6365adc332ca31_83914423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bffb9d8c83106fb9e9d5d067d9e483f131facf1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyect\\TpeTIO\\templates\\home.tpl',
      1 => 1667604728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6365adc332ca31_83914423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="iniciohome">
    <div>
        <h1 class="frasehome"><span id="frasehomer1">Todo lo que buscás, </span><span class="frasehomer2">a un solo
                click.</span></h1>
    </div>
    <img src="img/homepc.png">
</div>

<div class="productosylink">
    <h3>Productos</h3>
    <a href="productos">Ver todos los productos</a>
</div>

<div class="listaproductos">
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < 3) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < 3; $_smarty_tpl->tpl_vars['i']->value++) {
?>
        <div classs="productoind">
            <img src="<?php echo $_smarty_tpl->tpl_vars['productos']->value[$_smarty_tpl->tpl_vars['i']->value]->img;?>
">
            <p><?php echo $_smarty_tpl->tpl_vars['productos']->value[$_smarty_tpl->tpl_vars['i']->value]->nombre;?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['productos']->value[$_smarty_tpl->tpl_vars['i']->value]->nombreCorto;?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['productos']->value[$_smarty_tpl->tpl_vars['i']->value]->descripcion;?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['productos']->value[$_smarty_tpl->tpl_vars['i']->value]->precio;?>
</p>
        </div>
    <?php }
}
?>
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
        <img src="img/armarpc.png">
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
