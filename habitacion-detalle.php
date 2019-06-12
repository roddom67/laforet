<?php
	$class = "habitaciones";
	include "header.php"
?>

    <section class="main">
      <header class="bg-primary p-2">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h1>HABITACIÓN DOBLE</h1>
              <p>
                SUPERIOR
              </p>
            </div>
          </div>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8 p-4">
            <div
              id="carouselRoomIndicators"
              class="carousel slide mt-4"
              data-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="img/5bedb9ec69a25751772428.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/5bedb9ec69a25751772428.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/5bedb9ec69a25751772428.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/5bedb9ec69a25751772428.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
              </div>
              <a
                class="carousel-control-prev"
                href="#carouselRoomIndicators"
                role="button"
                data-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="sr-only">Previous</span>
              </a>
              <a
                class="carousel-control-next"
                href="#carouselRoomIndicators"
                role="button"
                data-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="sr-only">Next</span>
              </a>

              <ol class="carousel-indicators">
                <li
                  data-target="#carouselRoomIndicators"
                  data-slide-to="0"
                  class="active"
                >
                  <img
                    src="img/5bedb9ec69a25751772428.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </li>
                <li data-target="#carouselRoomIndicators" data-slide-to="1">
                  <img
                    src="img/5bedb9ec69a25751772428.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </li>
                <li data-target="#carouselRoomIndicators" data-slide-to="2">
                  <img
                    src="img/5bedb9ec69a25751772428.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </li>
                <li data-target="#carouselRoomIndicators" data-slide-to="3">
                  <img
                    src="img/5bedb9ec69a25751772428.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </li>
              </ol>
              <div></div>
            </div>
          </div>
          <div class="col-12 col-md-4 p-4">
            <div class="mt-2">
              <a href="#" class="btn btn-primary reservar w-100">
                <img src="img/iconos-05.png" /> ¡RESERVA AHORA!</a
              >
            </div>
            <div class="contact-form mt-4 pb-4">
              <div class="p-1 text-center">
                <h4>CONSULTE POR ESTA</h4>
                <h3>HABITACIÓN</h3>
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
                  <textarea
                    class="form-control"
                    id="mensaje"
                    rows="5"
                  ></textarea>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                  <button type="submit" class="btn btn-primary w-50">
                    ENVIAR
                  </button>
                </div>
              </form>
            </div>
          </div>
          <hr class="col-12" />
          <div class="col-12 col-md-3 title">
            <div
              class="d-flex flex-column flex-sm-row justify-content-center justify-content-sm-start align-items-center align-items-sm-end"
            >
              <div class="orangebox"></div>
              <div class="d-flex justify-content-center align-items-end">
                <h2>SERVICIOS</h2>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-9">
            <strong>Habitación doble con vista al mar.</strong>
            <p>
              Superficie de habitación 22m2 (aprox), con Balcon amueblado, Aire
              acondicionado, TV, Minibar, y Baño privado con ducha de agua
              caliente y articulos de higiene personal.
            </p>
            <div class="row">
              <div class="col-12 col-md-4">
                <h4>CANTIDAD DE PERSONAS</h4>
                <ul>
                  <li>Máximo 2 personas</li>
                </ul>
              </div>
              <div class="col-12 col-md-4">
                <h4>SERVICIOS DE HABITACIÓN</h4>
                <ul>
                  <li>Máximo 2 personas</li>
                </ul>
              </div>
              <div class="col-12 col-md-4">
                <h4>SERVICIOS DE HOTEL</h4>
                <ul>
                  <li>Máximo 2 personas</li>
                </ul>
              </div>
            </div>
          </div>
          <hr class="col-12" />
          <div class="col-12 others">
            <h5>Otras Habitaciones</h5>
            <div class="row">
              <div class="col-12 col-md-3 mb-3">
                <img src="img/5bedb9ec69a25751772428.jpg" class="w-100" />
                <h6>HABITACION DOBLE <strong>SUPERIOR</strong></h6>
                <a
                  href="habitacion-detalle.html"
                  class="btn btn-outline-secondary"
                  >VER DETALLE</a
                >
              </div>
              <div class="col-12 col-md-3 mb-3">
                <img src="img/5bedb9ec69a25751772428.jpg" class="w-100" />
                <h6>HABITACION DOBLE <strong>SUPERIOR</strong></h6>
                <a
                  href="habitacion-detalle.html"
                  class="btn btn-outline-secondary"
                  >VER DETALLE</a
                >
              </div>
              <div class="col-12 col-md-3 mb-3">
                <img src="img/5bedb9ec69a25751772428.jpg" class="w-100" />
                <h6>HABITACION DOBLE <strong>SUPERIOR</strong></h6>
                <a
                  href="habitacion-detalle.html"
                  class="btn btn-outline-secondary"
                  >VER DETALLE</a
                >
              </div>
              <div class="col-12 col-md-3 mb-3">
                <img src="img/5bedb9ec69a25751772428.jpg" class="w-100" />
                <h6>HABITACION DOBLE <strong>SUPERIOR</strong></h6>
                <a
                  href="habitacion-detalle.html"
                  class="btn btn-outline-secondary"
                  >VER DETALLE</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
	include "footer.php";
?>
