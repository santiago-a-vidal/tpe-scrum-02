<?php
/* Smarty version 3.1.33, created on 2018-10-10 22:38:00
  from 'C:\xampp\htdocs\tpWebII\templates\tourAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbe632846e626_76726331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ded5d7e148f2940ceab77850c3ce304e70dee220' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\tourAdmin.tpl',
      1 => 1539203733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:estadiosAdmin.tpl' => 1,
    'file:recitalesAdmin.tpl' => 1,
    'file:tablaCompleta.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bbe632846e626_76726331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:estadiosAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:recitalesAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:tablaCompleta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
