<?php
/* Smarty version 3.1.33, created on 2018-10-12 20:19:49
  from 'C:\xampp\htdocs\tpWebII\templates\tour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc0e5c5a0a421_07121167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cd0494909261002b63f817f6662f81aff5b8114' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\tour.tpl',
      1 => 1539368230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tablaCompleta.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc0e5c5a0a421_07121167 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:tablaCompleta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
