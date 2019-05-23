<?php
/* Smarty version 3.1.33, created on 2019-05-23 06:49:23
  from 'C:\xampp\htdocs\MVC\templates\mapaAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce62653cd6d01_35769022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98eb9c7b17cfe1b5080372300f475d8c8bd82841' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC\\templates\\mapaAdmin.tpl',
      1 => 1558586957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ce62653cd6d01_35769022 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <table hidden="hidden">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reportes']->value, 'reporte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reporte']->value) {
?>
        <tr>
            <td class="latitud"><?php echo $_smarty_tpl->tpl_vars['reporte']->value['latitud'];?>
</td><td class="longitud"><?php echo $_smarty_tpl->tpl_vars['reporte']->value['longitud'];?>
</td>
            <td class="foto"><?php echo $_smarty_tpl->tpl_vars['reporte']->value['foto'];?>
</td><td class="descripcion"><?php echo $_smarty_tpl->tpl_vars['reporte']->value['descripcion'];?>
</td>
        </tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
  <div class="container-fluid">
      <div id="map" class="mx-auto" style="width: 1120px; height: 580px; background: grey" />
  </div>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
