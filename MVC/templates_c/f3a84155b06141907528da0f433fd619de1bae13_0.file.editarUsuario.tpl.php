<?php
/* Smarty version 3.1.33, created on 2018-11-12 02:40:24
  from 'C:\xampp\htdocs\tpWebII\templates\editarUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be8da081a4635_03677780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3a84155b06141907528da0f433fd619de1bae13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\editarUsuario.tpl',
      1 => 1541915907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5be8da081a4635_03677780 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
        <div class="bordeArribaNews">
          <h1>USER</h1>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table class="table">
              <thead>
                <tr class="centrarfila warning">
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Admin</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody id="tablaTour">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuario']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                  <?php if ($_SESSION['User'] != $_smarty_tpl->tpl_vars['user']->value['nombre']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['admin'] == 0) {?>
                    <form action="guardarUsuario/<?php echo $_smarty_tpl->tpl_vars['user']->value['id_usuario'];?>
" method="post">
                      <tr class="centrarfila">
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['nombre'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                        <td><select class="form-control form-control-lg" name="admin">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select></td>
                        <td><button type="submit" class="btn-danger" name="button">Save</button></td>
                      </tr>
                    </form>
                    <?php } else { ?>
                    <form action="guardarUsuario/<?php echo $_smarty_tpl->tpl_vars['user']->value['id_usuario'];?>
" method="post">
                      <tr class="centrarfila">
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['nombre'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                        <td><select class="form-control form-control-lg" name="admin">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select></td>
                        <td><button type="submit" class="btn-danger" name="button">Save</button></td>
                      </tr>
                    </form>
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
