<?php
/* Smarty version 3.1.33, created on 2019-05-22 20:49:26
  from 'C:\xampp\htdocs\MVC\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce599b63eab67_89791122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '889472a1b62419535b324a3393e495504f99dcab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC\\templates\\user.tpl',
      1 => 1558550959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_5ce599b63eab67_89791122 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="container">

		<div class="row">
				<div class="col">
					<div id="map" class="" style="width: 575px; height: 575px; background: grey"></div>
				</div>
				<div class="col">
					<div class="" style="max-width:600px;padding:7px 20px;background:#ebeff2">
						<form class="form-horizontal control-label col-sm" role="form" action="userReport" method="post" enctype="multipart/form-data">
							<h3>Reporte</h3>
							<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
							 <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
							<?php }?>
							<h6 class="mt-3">Marque en el mapa la ubicacion de la basura.</h6>
							<label for="InputUsuario">Usuario</label>
							<input type="text" class="form-control" id="usuario" name="usuario" placeholder="" value="" required>
							<label for="InputLatitud">Latitud</label>
							<input type="latitud" class="form-control lat" id="latitud" name="latitud" placeholder="-37.318796" value="" required>
							<label for="InputLongitud">Longitud</label>
							<input type="longitud" class="form-control lat" id="longitud" name="longitud" placeholder="-59.138583" value="" required>
							<br>
							<h5>Descripcion (opcional)</h5>
							<textarea class="form-control" id="descripcion" name="descripcion" rows="5"></textarea>
							<br>
							<h5>Adjuntar foto</h5>
							<input type="file" id="imagen" name="imagen" value="imagen" required />
							<br>
							<br>
							<button type="submit" class="btn btn-primary mb-2">Submit</button>
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
