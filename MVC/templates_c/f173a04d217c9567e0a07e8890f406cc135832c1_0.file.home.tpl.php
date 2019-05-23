<?php
/* Smarty version 3.1.33, created on 2019-05-23 15:34:07
  from 'C:\xampp\htdocs\Trabajo Metodologia\MVC\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce6a14fdbe603_25349858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f173a04d217c9567e0a07e8890f406cc135832c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo Metodologia\\MVC\\templates\\home.tpl',
      1 => 1558292219,
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
function content_5ce6a14fdbe603_25349858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:mapa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
