<?php
/* Smarty version 3.1.33, created on 2018-11-22 16:40:34
  from 'C:\xampp\htdocs\tpWebII\templates\recitalesAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6cdf22d56e6_67635622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0b1df486857248b2db6f24fadb7853e936d0940' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\recitalesAdmin.tpl',
      1 => 1542900914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf6cdf22d56e6_67635622 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>CONCERTS ADMIN</h1>
      </div>
          <table class="table">
            <thead>
              <tr class="centrarfila warning">
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody id="tablaTour">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Recitales']->value, 'recital');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['recital']->value) {
?>

                <tr class="centrarfila">
                  <td><?php echo $_smarty_tpl->tpl_vars['recital']->value['nombre'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['recital']->value['precio'];?>
</td><td><a class="btn btn-danger" href="editarRecital/<?php echo $_smarty_tpl->tpl_vars['recital']->value['id_recital'];?>
">Editar</a></td><td><a class="btn btn-danger" href="eliminarRecital/<?php echo $_smarty_tpl->tpl_vars['recital']->value['id_recital'];?>
">Borrar</a></td>
                </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>

          <form enctype="multipart/form-data" class="centrarfila" action="agregarRecital" method="post">

            <input type="text" placeholder="name" name="nombre" value="">
            <input type="number" placeholder="price" name="precio" value="">

              <select name="id_estadio">
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

              <button type="submit" class="btn btn-danger" name="button">Cargar</button>


           </form>

            <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

            </div>

            </div>
      </div>
</div>
<?php }
}
