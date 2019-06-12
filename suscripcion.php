<?php
	$class = "suscripcion";
	include "header.php"
?>

    <section class="main">
      <header class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-4 text-center">
            <img src="img/suscribirte.jpg" class="w-50" />
            <h1>SUSCRIPCIÓN</h1>
          </div>
        </div>
      </header>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <form class="m-4" action="suscripcion-ok.html">
              <div class="form-group">
                <label for="nombreapellido">Nombre</label>
                <input
                  type="nya"
                  class="form-control"
                  id="nombreapellido"
                  aria-describedby="nyaHelp"
                  placeholder=""
                />
              </div>
              <div class="form-group">
                <label for="nombreapellido">Apellido</label>
                <input
                  type="nya"
                  class="form-control"
                  id="nombreapellido"
                  aria-describedby="nyaHelp"
                  placeholder=""
                />
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  aria-describedby="emailHelp"
                  placeholder=""
                />
              </div>
              <div class="form-group">
                <label for="email">Confirmar Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  aria-describedby="emailHelp"
                  placeholder=""
                />
              </div>
              <div class="form-group">
                <label for="nombreapellido">Télefono (opcional)</label>
                <input
                  type="nya"
                  class="form-control"
                  id="nombreapellido"
                  aria-describedby="nyaHelp"
                  placeholder=""
                />
              </div>
              <div class="form-group">
                <label for="nombreapellido">Pais</label>
                <input
                  type="nya"
                  class="form-control"
                  id="nombreapellido"
                  aria-describedby="nyaHelp"
                  placeholder=""
                />
              </div>

              <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary w-50">
                  ENVIAR
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<?php
	include "footer.php";
?>
