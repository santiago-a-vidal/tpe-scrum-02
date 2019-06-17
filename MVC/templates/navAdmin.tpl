<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
      <img class="icono" src="images/basura.ico" alt="Basura Tandil">
          <a class="navbar-brand" href="homeadmin">
              Basura Tandil</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
        <h4 class="nombre text-success">{$smarty.session.apellido},{$smarty.session.nombre}</h4>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="homeadmin"><i class="fas fa-home"></i> Home</a>
                <a class="nav-item nav-link active" href="mapaadmin"><i class="fas fa-home"></i> Mapa cuadrilla</a>
                <a class="nav-item nav-link active" href="logout"><i class="fas fa-home"></i> Salir</a>
              </div>
          </div>
      </div>
  </nav>