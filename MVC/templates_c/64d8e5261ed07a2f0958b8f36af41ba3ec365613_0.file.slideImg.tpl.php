<?php
/* Smarty version 3.1.33, created on 2018-11-22 15:39:57
  from 'C:\xampp\htdocs\tpWebII\templates\slideImg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6bfbd03ff77_23541861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64d8e5261ed07a2f0958b8f36af41ba3ec365613' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\slideImg.tpl',
      1 => 1542897584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf6bfbd03ff77_23541861 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
<figure class= "noticia col-lg-3 col-md-3 col-sm-3 col-xs-3 linkImg">
    <img class="imgDetalleRecital" width="90%" height="200px" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['url'];?>
" alt="Image">
</figure>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
