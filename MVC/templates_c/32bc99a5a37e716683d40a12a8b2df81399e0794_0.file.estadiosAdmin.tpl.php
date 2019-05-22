<?php
/* Smarty version 3.1.33, created on 2018-11-22 16:48:51
  from 'C:\xampp\htdocs\tpWebII\templates\estadiosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6cfe39c0de6_66117679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32bc99a5a37e716683d40a12a8b2df81399e0794' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\estadiosAdmin.tpl',
      1 => 1542901473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf6cfe39c0de6_66117679 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
        <div class="bordeArribaNews">
          <h1>STADIUMS ADMIN</h1>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table class="table centrarfila">
              <thead>
                <tr class="warning">
                  <th scope="col">Name</th>
                  <th scope="col">Capacity</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody id="tablaTour">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Estadios']->value, 'estadio');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['estadio']->value) {
?>

                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['estadio']->value['nombre'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['estadio']->value['capacidad'];?>
</td><td><a class="btn btn-danger" href="editarEstadio/<?php echo $_smarty_tpl->tpl_vars['estadio']->value['id_estadio'];?>
">Editar</a></td><td><a class="btn btn-danger" href="eliminarEstadio/<?php echo $_smarty_tpl->tpl_vars['estadio']->value['id_estadio'];?>
">Borrar</a></td>
                </tr>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </tbody>
            </table>

            <form class="centrarfila" action="agregarEstadio" method="post">
                <input type="text" placeholder="name" name="nombre" value="">
                <input type="number" placeholder="capacity" name="capacidad" value="">
                <button type="submit" class="btn-danger" name="button">Cargar</button>
            </form>

          </div>
        </div>
        <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

        </div>
      </div>
    </div>
  </div>
<?php }
}
