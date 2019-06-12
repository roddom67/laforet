    <?php
      if( !isset($eses)) {
    ?>
    <!-- FOOTER -->
    <footer>
      <!-- MENU SOLO PARA MOBILE -->
      <div class="d-flex d-md-none justify-content-center align-items-center p-1">
        <nav class="nav nav-social-mobile">
          <a class="btn" href="#"><img src="img/iconos-06.png" alt="instagram" /></a>
          <a class="btn" href="#"><img src="img/iconos-07.png" alt="facebook" /></a>
          <a class="btn" href="#"><img src="img/iconos-08.png" alt="tripavisor" /></a>
        </nav>
      </div>
      <!-- END MENU -->
      <div class="social bg-primary">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="row">
                <div class="col-2 col-md-2">
                  <div class="icono-mail d-flex justify-content-center align-items-center">
                    <i class="far fa-envelope"></i>
                  </div>
                </div>
                <div class="col-10">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Ingrese su email" aria-label="Ingrese su email" aria-describedby="button-addon2" />
                    <div class="input-group-append">
                      <div class="separador d-flex align-items-center">
                        <div class="linea"></div>
                      </div>
                      <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                        <i class="fas fa-sign-in-alt"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 d-none d-sm-none d-md-flex justify-content-end">
              <nav class="nav nav-social">
                <a class="btn" href="#"><img src="img/iconos-10.png" alt="instagram"/></a>
                <a class="btn" href="#"><img src="img/iconos-11.png" alt="facebook" /></a>
                <a class="btn" href="#"><img src="img/iconos-12.png" alt="tripavisor" /></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class=" menues">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-3 d-none d-sm-block">
              <a class="navbar-brand" href="index.html">
                <img src="img/logo-la-foret-la-playa-beach-club.png" alt="La Foret" />
              </a>
            </div>
            <div class="col-6 col-md-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">link 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">link 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">link 3</a>
                </li>
              </ul>
            </div>
            <div class="col-6 col-md-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">link 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">link 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">link 3</a>
                </li>
              </ul>
            </div>
            <div class="col-12 col-md-3  d-none d-sm-block">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">link 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">link 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">link 3</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12">
              <hr />
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12">
              <p class="p-2">Copy</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- END FOOTER -->
    <?php
    	if(isset($index)){
    ?>
    <!-- modal de oferta -->
      <div class="modal fade suscripcion" id="ModalSuscripcion" tabindex="-1" role="dialog"
        aria-labelledby="ModalsuscripcionTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="p-4 text-center">
              <div class="header w-100">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <img src="img/suscribirte.jpg" class="p-2">
              <!-- div class="text-center p-1">
                <h1>¡SUSCRIBITE!</h1>
                <p>Para recibir las novedades y <br /> promociones de nuestro hotel</p>
              </div>
              <div class="text-center pb-4">
                <a href="suscripcion.html" class="btn btn-primary">SUSCRIBIRME AHORA</a>
                <button type="button" class="btn" data-dismiss="modal">No, gracias</button>
              </div -->
              <div class="text-center p-1">
                <h1>¡FAÇA SEU CADASTRO!</h1>
                <p>Para receber novidades e <br /> promoções do nosso hotel</p>
              </div>
              <div class="text-center pb-4">
                <a href="suscripcion.html" class="btn btn-primary">Cadastrar agora</a>
                <button type="button" class="btn" data-dismiss="modal">Não, obrigado</button>
              </div>
            </div>
          </div>
        </div>
    </div>
    <?php
    	}
    ?>
    <?php
    }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
      integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
      integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
    <?php
    	if(isset($hasSlick)){
    ?>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <?php
    	}
    ?>
	 <?php if(isset($galeriaActive)){ ?>
	   <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
		<script src="js/lightgallery.min.js"></script>
		<script src="js/lg-pager.min.js"></script>
		<script src="js/lg-autoplay.min.js"></script>
		<script src="js/lg-fullscreen.min.js"></script>
		<script src="js/lg-zoom.min.js"></script>
		<script src="js/lg-hash.min.js"></script>
		<script src="js/lg-share.min.js"></script>
	 <?php } ?>
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <script src="js/sly.min.js"></script>
    <script src="js/maps.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
