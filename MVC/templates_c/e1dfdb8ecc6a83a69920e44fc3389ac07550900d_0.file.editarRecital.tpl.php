<?php
/* Smarty version 3.1.33, created on 2018-11-21 22:30:58
  from 'C:\xampp\htdocs\tpWebII\templates\editarRecital.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf5ce925bbdc2_45778609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1dfdb8ecc6a83a69920e44fc3389ac07550900d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\editarRecital.tpl',
      1 => 1542835850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:panelImgEditRecital.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf5ce925bbdc2_45778609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>CONCERTS</h1>
      </div>

          <form class="centrarfila" enctype="multipart/form-data" action="actualizarRecital/<?php echo $_smarty_tpl->tpl_vars['Recital']->value[0]['id_recital'];?>
" method="post">

            <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['Recital']->value[0]['nombre'];?>
" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['Recital']->value[0]['nombre'];?>
">
            <input type="number" placeholder="<?php echo $_smarty_tpl->tpl_vars['Recital']->value[0]['precio'];?>
" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['Recital']->value[0]['precio'];?>
">

              <select name="estadio_id">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Estadios']->value, 'estadio');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['estadio']->value) {
?>

                  <option value="<?php echo $_smarty_tpl->tpl_vars['estadio']->value['id_estadio'];?>
"><?php echo $_smarty_tpl->tpl_vars['estadio']->value['nombre'];?>
</option>

                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>

              <input type="file" id="imagenes" name="imagenes[]" multiple>

            <button type="submit" class="btn-danger" name="button">Cargar</button>

           </form>

            <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <a class="back" href="tourAdmin"> < BACK </a>
            </div>

            </div>
      </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:panelImgEditRecital.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
