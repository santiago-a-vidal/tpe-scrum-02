{include file="header.tpl"}

{include file="navLogin.tpl"}

	<div class="container">

		    <div class="row">
					<div class="col">
						<div id="map" class="" style="width: 550px; height: 550px; background: grey"></div>
					</div>
					<div class="col mt-3">
						{if !empty($error) }
		         <div class="alert alert-danger" role="alert">{$error}</div>
						{/if}
            <div class="mb-3">
                <h3>Registro</h3>
            </div>
            <div class="">
                <form action="registeruser" method="post">
                    <div class="form-group">
                        <label for="InputMail">Email</label>
                        <input type="text" class="form-control" id="mail" name ="mail" placeholder="usuario@ejemplo.com" aria-describedby="mailHelp" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="InputNombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name ="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="InputApellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name ="apellido" placeholder="Apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="password1" name ="password1" placeholder="password123" required>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Confirmar password</label>
                        <input type="password" class="form-control" id="password2" name ="password2" placeholder="password123" required>
                    </div>
                    <button type="submit" id="btn-registro" class="btn btn-primary btn-dark">Registrarse</button>
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