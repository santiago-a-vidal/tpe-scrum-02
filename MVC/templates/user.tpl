{include file="header.tpl"}

{include file="nav.tpl"}

	<div class="container">

		<div class="row">
				<div class="col">
					<div id="map" class="" style="width: 575px; height: 575px; background: grey"></div>
				</div>
				<div class="col">
					<div class="" style="max-width:600px;padding:7px 20px;background:#ebeff2">
						<form class="form-horizontal control-label col-sm" role="form" action="userReport" method="post" enctype="multipart/form-data">
							<h3>Reporte</h3>
							{if !empty($error) }
							 <div class="alert alert-danger" role="alert">{$error}</div>
							{/if}
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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
  <script type="text/javascript" src="js/user_apiMap.js"></script>

</body>
</html>
