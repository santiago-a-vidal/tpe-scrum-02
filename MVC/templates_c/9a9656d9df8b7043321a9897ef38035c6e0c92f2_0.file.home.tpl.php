<?php
/* Smarty version 3.1.33, created on 2019-05-19 03:03:44
  from 'C:\xampp\htdocs\proyectos\tpe-scrum-02\MVC\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce0ab70a9b740_46050474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a9656d9df8b7043321a9897ef38035c6e0c92f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe-scrum-02\\MVC\\templates\\home.tpl',
      1 => 1558227440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:mapa.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ce0ab70a9b740_46050474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:mapa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
