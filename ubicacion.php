<?php
	$class = "ubicacion";
	$ubicacionActive = true;
	include "header.php"
?>

    <section class="main">
      <header class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <div class="square"></div>
          </div>
          <div class="col-12 d-flex justify-content-center">
            <h1 class="w-50 text-center">Ubicación</h1>
          </div>
          <div class="col-12 d-flex justify-content-center">
            <div class="bar"></div>
          </div>
        </div>
      </header>
      <div class="container content">
        <div class="row description">
          <div class="col-12 p-4">
            <p>
              El <strong>Hotel Ville La Plage</strong> situado frente al mar,
              con vista a la famosa playa de João Fernandes - Búzios - Brasil El
              Hotel Ville La Plage situado frente al mar, con vista a la famosa
              playa de João Fernandes - Búzios - Brasil
            </p>
            <p>
              El Hotel Ville La Plage situado frente al mar, con vista a la
              famosa playa de João Fernandes - Búzios - Brasil
            </p>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8 maps">
          <div
            id="map"
            class="map"
            data-type="2"
            data-lat-plf=""
            data-lng-plf=""
            data-lat-vlp="-22.746751"
        		data-lng-vlp="-41.877020000000016"
          ></div>
        </div>
        <div class="col-12 col-md-4">
          <div class="contact-form mt-4 pb-4">
            <div class="p-1 text-center">
              <h4>REALIZA TU</h4>
              <h3>CONSULTA</h3>
            </div>
            <hr />
            <form class="m-4">
              <div class="form-group">
                <label for="nombreapellido">Nombre y Apellido</label>
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
                <label for="entrada">Entrada</label>
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control"
                    id="entrada"
                    placeholder=""
                    aria-describedby="inputGroupPrependfrom"
                    required
                  />
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrependfrom"
                      ><i class="far fa-calendar-alt"></i
                    ></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="salida">Salida</label>
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control"
                    id="salida"
                    placeholder=""
                    aria-describedby="inputGroupPrependto"
                    required
                  />
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrependto"
                      ><i class="far fa-calendar-alt"></i
                    ></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="5"></textarea>
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
    </div>
<?php
	include "footer.php";
?>
