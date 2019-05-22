<?php
/* Smarty version 3.1.33, created on 2018-10-10 22:40:34
  from 'C:\xampp\htdocs\tpWebII\templates\signUp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbe63c27fb951_69201876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ad547d9fffa23094249d8ed8bf3ac255db4296a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\signUp.tpl',
      1 => 1539203981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bbe63c27fb951_69201876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <div class="row articulo">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>SIGN-UP</h1>
      </div>

      <form action="agregarUsuario" method="post">

        <div class="form-group">
          <label for="exampleInputUser1">Username</label>
          <input type="text" class="form-control" name="nombre" placeholder="Enter username">

        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="clave" placeholder="Enter password">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" name="email" placeholder="Enter email">
        </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['message']->value)) {?>
          <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
        <?php }?>
        <button type="submit" class="btn btn-danger">Sign in</button>
      </form>
    </div>
    <div class="bordeAbajoNews col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">

    </div>
  </div>
</div> <!-- Fin container -->

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
