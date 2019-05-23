<?php
/* Smarty version 3.1.33, created on 2019-05-23 17:27:19
  from 'C:\xampp\htdocs\Trabajo Metodologia\MVC\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce6bbd7881554_83980974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '521c6e3bedfb66cb50d006c1853440a587addcd9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo Metodologia\\MVC\\templates\\register.tpl',
      1 => 1558623264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_5ce6bbd7881554_83980974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="container">

			<div class="row">
					<div class="col">
						<div id="map" class="" style="width: 550px; height: 550px; background: grey"></div>
					</div>
					<div class="col mt-3">
						<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
		         <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
						<?php }?>
            <div class="mb-3">
                <h3>Registro</h3>
            </div>
            <div class="">
                <form action="registerUser" method="post">
                    <div class="form-group">
                        <label for="InputName">Usuario</label>
                        <input type="email" class="form-control" id="email" name ="usuario" placeholder="usuario@ejemplo.com" aria-describedby="emailHelp" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="password" name ="password" placeholder="password123" required>
                    </div>
                    <button type="submit" id="btn-registro" class="btn btn-primary btn-dark">Registrarse</button>
                </form>
            </div>

					</div>
			</div>

		</div>

  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/user_apiMap.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
