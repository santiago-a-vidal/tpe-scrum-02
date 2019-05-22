<?php
/* Smarty version 3.1.33, created on 2018-10-10 23:18:44
  from 'C:\xampp\htdocs\tpWebII\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbe6cb438f224_87610453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8c035da68a9c526bc870ffece7ce10ef28998d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWebII\\templates\\login.tpl',
      1 => 1539206238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bbe6cb438f224_87610453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <div class="row articulo">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>LOGIN</h1>
      </div>

      <form action="verificarLogin" method="post">

        <div class="form-group">
          <label for="exampleInputUser1">Username</label>
          <input type="text" class="form-control" name="nombre" placeholder="Enter username">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="clave" placeholder="Enter password">
        </div>
        <div>
          <?php if (!empty($_smarty_tpl->tpl_vars['message']->value)) {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
          <?php }?>
        </div>
        <button type="submit" class="btn btn-danger">Login</button>
      </form>
    </div>
    <div class="bordeAbajoNews col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">

    </div>
  </div>
</div> <!-- Fin container -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
