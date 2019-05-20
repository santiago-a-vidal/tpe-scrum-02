{include file="header.tpl"}

{include file="nav.tpl"}

		<div class="container">

			<div class="row">
					<div class="col">
						<div id="map" class="" style="width: 550px; height: 550px; background: grey"></div>
					</div>
					<div class="col mt-3">
						<div class="container" style="max-width:600px;padding:40px 20px;background:#ebeff2">
						 <form class="form-horizontal control-label col-sm" role="form">
							<h3>Reporte</h3>
							<h5>Ubicacion</h5>
							<label for="InputLatitud">Latitud</label>
							<input type="latitud" class="form-control" id="latitud" placeholder="-37.318796">
							<label for="InputLongitud">Longitud</label>
							<input type="longitud" class="form-control" id="longitud" placeholder="-59.138583">
							<!-- ACA EL MAPA INTERACTIVO -->
							<br>
							<h5>Descripcion (opcional)</h5>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
							<br>
							<h5>Adjuntar foto</h5>
							<input type="file" name="imagen" value="imagen">
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
