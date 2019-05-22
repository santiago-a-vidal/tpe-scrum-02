<?php
/* Smarty version 3.1.33, created on 2018-11-20 23:29:23
  from 'C:\xampp\htdocs\tpWebII\templates\DetallesRecital.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf48ac32ecf55_79210408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa09cb94895f2c16938e30552f3fb3314ecdadc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\DetallesRecital.tpl',
      1 => 1542752961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:slideImg.tpl' => 1,
    'file:comentarios.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf48ac32ecf55_79210408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<input type="input" hidden="hidden" id="id_recital" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_recital'];?>
">

<div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>DETAILS</h1>
      </div>
      <table class="table">
        <thead>
          <tr class="centrarfila warning">
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Stadium</th>
            <th scope="col">Capacity</th>
          </tr>
        </thead>
        <tbody id="tablaTour">
          <tr class="centrarfila">
            <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['recital'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['fila']->value['precio'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['fila']->value['estadio'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['fila']->value['capacidad'];?>
</td>
          </tr>
        </tbody>
      </table>

      <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <a class="back" href="tour"> < BACK </a>
      </div>
    </div>
  </div>
  <?php if (!empty($_smarty_tpl->tpl_vars['imagenes']->value)) {?>
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>IMAGES</h1>
      </div>
        <div class="row">

            <?php $_smarty_tpl->_subTemplateRender("file:slideImg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
      <div class="row">
        <figure class="col-lg-6 col-md-10 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-1 col-sm-offset-1">

        </figure>
      </div>
      <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

      </div>
    </div>
  </div>
  <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("file:comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
