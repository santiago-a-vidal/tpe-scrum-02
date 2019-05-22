<?php
/* Smarty version 3.1.33, created on 2018-11-22 16:31:20
  from 'C:\xampp\htdocs\tpWebII\templates\tablaCompleta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6cbc8b4f4c8_34915716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fb4b684ac23ae06a9bb3c780edde23b5d4bf7ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\tablaCompleta.tpl',
      1 => 1542900678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf6cbc8b4f4c8_34915716 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">

      <div class="bordeArribaNews">
        <h1>CONCERTS</h1>
      </div>
          <table class="table">
            <thead>
              <tr class="centrarfila warning">
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Stadium</th>
                <th scope="col">Capacity</th>
                <th scope="col">Details</th>
              </tr>
            </thead>
            <tbody id="tablaTour">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Tabla']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>

                <tr class="centrarfila">
                  <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['recital'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['fila']->value['precio'];?>
</td><td> <a class="linkRed" href="Estadio/<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_estadio'];?>
"><?php echo $_smarty_tpl->tpl_vars['fila']->value['estadio'];?>
</a> </td><td><?php echo $_smarty_tpl->tpl_vars['fila']->value['capacidad'];?>
</td>
                  <td> <a class="linkRed" href="detalleRecital/<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_recital'];?>
">View</a> </td>
                </tr>

              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>

            <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

            </div>

            </div>
      </div>
</div>
<?php }
}
