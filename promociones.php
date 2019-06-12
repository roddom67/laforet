<?php
	$class = "promociones";
	$promoActive = true;
	include "header.php"
?>
    <section class="main">
      <header class="bg-primary p-2">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h1>¡SUPER PROMOCIÓN DE TEMPORADA ALTA!</h1>
              <p>
                MEJORAMOS LAS TARIFAS Y TE REGALAMOS EL TRANSLADO
                Aeropuresto-Hotel-Aeropuerto
              </p>
            </div>
          </div>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div
              id="carouselExampleControls"
              class="carousel slide mt-2 mb-2"
              data-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="http://localhost/villelaplage/img/hotel.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="http://s3-sa-east-1.amazonaws.com/todobuzios/images/5c34f7dd171b1412729176.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="http://s3-sa-east-1.amazonaws.com/todobuzios/images/5c34fbd54cdb0222741426.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
              </div>
              <a
                class="carousel-control-prev"
                href="#carouselExampleControls"
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
                href="#carouselExampleControls"
                role="button"
                data-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-12 col-md-8 p-4 content">
            <h1>¡SUPER PROMOCIÓN DE TEMPORADA ALTA!</h1>
            <p>las nuevas reservas</p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate
              <strong>las nuevas reservas</strong> velit esse cillum dolore eu
              fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est
              laborum.
            </p>
            <ul>
              <LI>Lorem ipsum </LI>
              <LI>dolor sit amet</LI>
              <LI>consectetur adipiscing </LI>
              <LI>elit, sed do</LI>
              <LI>eiusmod tempor incididunt </LI>
              <LI>ut labore</LI>
            </ul>
            <h3><i>las nuevas reservas</i></h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate
            </p>

            <div class="legales">
              <small
                >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate las nuevas reservas velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.</small
              >
            </div>
          </div>
          <div class="col-12 col-md-4 p-4">
            <div class="promocion-form mt-4 pb-4">
              <div class="p-1 text-center">
                <h4>CONSULTE POR ESTA</h4>
                <h3>PROMOCIÓN</h3>
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
        </div>
      </div>
      <div class="container">
        <hr class="w-100" />
      </div>
      <div class="others">
        <div class="container p-4">
          <h5>VER MAS PROMOCIONES</h5>
          <div class="row">
            <div class="col-12 col-md-4 mb-3 p-3">
              <img src="img/promo.jpg" class="w-100" />
              <h6>PROMO 1 <strong>SUPERIOR</strong></h6>
              <a href="#" class="btn btn-outline-secondary">VER DETALLE</a>
            </div>
            <div class="col-12 col-md-4 mb-3 p-3">
              <img src="img/promo.jpg" class="w-100" />
              <h6>PROMO 2</h6>
              <a href="#" class="btn btn-outline-secondary">VER DETALLE</a>
            </div>
            <div class="col-12 col-md-4 mb-3 p-3">
              <img src="img/promo.jpg" class="w-100" />
              <h6>PROMO 3</h6>
              <a href="#" class="btn btn-outline-secondary">VER DETALLE</a>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
	include "footer.php";
?>
