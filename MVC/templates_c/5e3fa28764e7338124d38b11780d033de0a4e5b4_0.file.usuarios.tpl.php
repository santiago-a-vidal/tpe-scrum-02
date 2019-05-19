<?php
/* Smarty version 3.1.33, created on 2018-11-07 13:36:10
  from 'C:\xampp\htdocs\tpWebII\templates\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be2dc3a2bd9b5_82889866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e3fa28764e7338124d38b11780d033de0a4e5b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\usuarios.tpl',
      1 => 1541594167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5be2dc3a2bd9b5_82889866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
        <div class="bordeArribaNews">
          <h1>USERS</h1>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table class="table">
              <thead>
                <tr class="centrarfila warning">
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Admin</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody id="tablaTour">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
                  <?php if ($_SESSION['User'] != $_smarty_tpl->tpl_vars['usuario']->value['nombre']) {?>
                      <?php if ($_smarty_tpl->tpl_vars['usuario']->value['admin'] == 0) {?>
                        <tr class="success centrarfila">
                          <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</td><td>No</td><td><a class="btn btn-danger" href="editarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
">Edit</a></td><td><a class="btn btn-danger" href="eliminarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
">Delete</a></td>
                        </tr>
                      <?php } else { ?>
                        <tr class="danger centrarfila">
                          <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</td><td>Yes</td><td><a class="btn btn-danger" href="editarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
">Edit</a></td><td><a class="btn btn-danger" href="eliminarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
">Delete</a></td>
                        </tr>
                      <?php }?>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </tbody>
            </table>

          </div>
        </div>
        <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

        </div>
      </div>
    </div>
  </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
