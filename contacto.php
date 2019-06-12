<?php
	$class = "contacto";
	$contactoActive = true;
	include "header.php"
?>

    <section class="main">
      <header class="container">
        <div class="col-12 col-md-3 title">
          <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-sm-start align-items-center align-items-sm-end">
            <div class="orangebox"></div>
            <div class="d-flex justify-content-center align-items-end mt-1 mt-md-0">
              <h2>CONTACTO</h2>
            </div>
          </div>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8">
            <form class="m-4">
              <div class="form-group">
                <label for="nombreapellido">Nombre</label>
                <input
                  type="text"
                  class="form-control"
                  id="nombreapellido"
                  aria-describedby="nyaHelp"
                  placeholder=""
                />
              </div>
              <div class="form-group">
                <label for="nombreapellido">Apellido</label>
                <input
                  type="text"
                  class="form-control"
                  id="nombreapellido"
                  aria-describedby="nyaHelp"
                  placeholder=""
                />
              </div>
              <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input
                  type="phone"
                  class="form-control"
                  id="telefono"
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
              <div class="row">
                <div class="form-group col-6">
                  <label for="entrada">Entrada</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      id="entrada"
                      placeholder=""
                      aria-describedby="inputGroupPrependfrom"
                    />
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrependfrom"
                        ><i class="far fa-calendar-alt"></i
                      ></span>
                    </div>
                  </div>
                </div>
                <div class="form-group col-6">
                  <label for="salida">Salida</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      id="salida"
                      placeholder=""
                      aria-describedby="inputGroupPrependto"
                    />
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrependto"
                        ><i class="far fa-calendar-alt"></i
                      ></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="defaultCheck1"
                />
                <label class="form-check-label" for="defaultCheck1">
                  No decidí días
                </label>
              </div>
              <div class="row">
                <div class="form-group col-6">
                  <label for="personas">Personas</label>
                  <input
                    type="number"
                    class="form-control"
                    id="personas"
                    aria-describedby="emailHelp"
                    placeholder="1"
                    value="1"
                    min="1"
                  />
                </div>
                <div class="form-group col-6">
                  <label for="menores">Menores (entre 1 y 5 años)</label>
                  <input
                    type="number"
                    class="form-control"
                    id="menores"
                    aria-describedby="menoresHelp"
                    placeholder="0"
                    value="0"
                    min="0"
                  />
                  <div class="menores-box p-1"></div>
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
          <div class="col-12 col-md-4">
            <div class="row">
              <div class="col-12 reservas">
                <div class="row">
                  <div class="col-12 p-2">
                    <h2 class="text-center">
                      <img src="img/iconos-13.png" /> CENTRAL DE RESERVAS
                    </h2>
                  </div>
                  <div class="col-12">
                    <div
                      class="row p-3 d-flex justify-content-center align-items-center"
                    >
                      <div class="col-12 col-md-10 bg-gray">
                        <h3 class="p-2 ">Argentina y resto del mundo</h3>
                      </div>
                    </div>
                    <div
                      class="text-contact-info p-1 mb-2 d-flex justify-content-center align-items-center"
                    >
                      <div class="col-12 col-md-9">
                        <div class="row">
                          <div class="col-3 col-md-3">
                            <img src="img/iconos-14.png" />
                          </div>
                          <div clas="col-9 col-md-8">
                            <strong><a href="tel:54115199-8178" alt="+5411 5199-8178">+5411 5199-8178</a></strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-3 col-md-3">
                            <img src="img/iconos-03.png" />
                          </div>
                          <div clas="col-9 col-md-9">
                            <a href="https://api.whatsapp.com/send?phone=5491166392638&text=Hola+quiero+consultar+por+" alt="whatsapp">+54 911 6639-2638</a>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-3 col-md-3">
                            <img src="img/iconos-16.png" />
                          </div>
                          <div clas="col-9 col-md-9">
                            <a href="mailto:callcenter@lp-lf.com" alt="mail">callcenter@lp-lf.com</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="row p-3 d-flex justify-content-center align-items-center">
                      <div class="col-12 col-md-10 bg-gray">
                        <h3 class="p-2 bg-gray">BRasil</h3>
                      </div>
                    </div>
                    <div class="text-contact-info p-1 d-flex justify-content-center align-items-center">
                      <div class="col-12 col-md-8">
                        <div class="row">
                          <div class="col-3 col-md-3">
                            <img src="img/iconos-14.png" />
                          </div>
                          <div clas="col-9 col-md-9">
                            <a href="tel:+552226239901" alt="+55 22 2623-9901">+55 22 2623-9901</a>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-3 col-md-3">
                            <img src="img/iconos-03.png" />
                          </div>
                          <div clas="col-9 col-md-9">
                            <a href="https://api.whatsapp.com/send?phone=+5422xxxxxxxx&text=Olá+eu+quero+consultar+por+" alt="whatsapp">+54 22 xxxx-xxxx</a>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-3 col-md-3">
                            <img src="img/iconos-16.png" />
                          </div>
                          <div clas="col-9 col-md-9">
                            <a href="mailto:reservasvlp@lp-lf.com" alt="mail">reservasvlp@lp-lf.com</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4 col-md-4 border-right">
                <img src="img/logo-la-foret.svg" class="img-fluid" width="78" />
              </div>
              <div class="col-8 col-md-8 direccion">
                <h3><img src="img/icono-direccion.png" /> DIRECCIÓN</h3>
                <p>Rua Onze, R. João Fernandes, 8</p>
                <p>Quadra G Lote, Búzios</p>
                <p>RJ, 28950-000, Brasil</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="maps">
      <div
        id="map"
        class="map"
        data-type="2"
        data-lat-plf=""
        data-lng-plf=""
        data-lat-vlp="-22.746751"
        data-lng-vlp="-41.877020000000016"
      ></div>
    </section>
<?php
	include "footer.php";
?>