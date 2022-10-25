<?php
/* Smarty version 4.2.1, created on 2022-10-25 16:43:32
  from 'C:\xampp\htdocs\TpeTio\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6357f61434b929_04815661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65ada46cb2c12693e814f77001ee47c2f1364197' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeTio\\templates\\productos.tpl',
      1 => 1666709009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6357f61434b929_04815661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="d-flex flex-row mt-3 flexflexible">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
        <div class="card ms-2 mt-2" style="width: 18rem;">
            <img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value->img;?>
" class="img-thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
">
            <div class="card-body text-center">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombreCorto;?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</p>
                <div class="d-flex row justify-content-center">
                    <a href="mostrarprod/<?php echo $_smarty_tpl->tpl_vars['producto']->value->ID;?>
" class="btn btn-primary ">Ver</a>
                </div>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
