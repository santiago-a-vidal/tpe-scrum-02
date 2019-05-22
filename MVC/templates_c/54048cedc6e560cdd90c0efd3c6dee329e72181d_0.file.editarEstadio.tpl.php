<?php
/* Smarty version 3.1.33, created on 2018-11-11 06:58:41
  from 'C:\xampp\htdocs\tpWebII\templates\editarEstadio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be7c511062919_71009229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54048cedc6e560cdd90c0efd3c6dee329e72181d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\editarEstadio.tpl',
      1 => 1541915887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5be7c511062919_71009229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
        <div class="bordeArribaNews">
          <h1>STADIUM</h1>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <form class="centrarfila" action="actualizarEstadio/<?php echo $_smarty_tpl->tpl_vars['Estadio']->value[0]['id_estadio'];?>
" method="post">
                <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['Estadio']->value[0]['nombre'];?>
" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['Estadio']->value[0]['nombre'];?>
" />
                <input type="number" placeholder="<?php echo $_smarty_tpl->tpl_vars['Estadio']->value[0]['capacidad'];?>
" name="capacidad" value="<?php echo $_smarty_tpl->tpl_vars['Estadio']->value[0]['capacidad'];?>
" />
                <button type="submit" class="btn-danger" name="button">Guardar</button>
            </form>

          </div>
        </div>
        <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <a class="back" href="tourAdmin"> < BACK </a>
        </div>
      </div>
    </div>
  </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
