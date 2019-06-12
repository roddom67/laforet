<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
      crossorigin="anonymous"
    />
    <link
      href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />
    <?php
    if(isset($hasSlick)){
    ?>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    
    <?php
    }
    ?>
    <?php if(isset($galeriaActive)){ ?>
    <link rel="stylesheet" href="css/lightgallery.css">
    <?php } ?>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/modal.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <?php if(isset($eses)){ ?>
    <link rel="stylesheet" href="css/inicio.css">
    <?php } ?>

    <title>Ville la plage</title>
  </head>

  <body <?php if(isset($class)){ echo 'class="'.$class.'"'; } ?>>
    <!-- HEADER -->
    <header>
    <?php
      if( !isset($eses)) {
    ?>
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-3 col-md-4">
              <div class="p-1 p-md-2 d-flex align-items-center">
                <ion-icon name="sunny"></ion-icon> 32 °C
                <span class="d-none d-sm-block ml-1">- algo de nubes</span>
              </div>
            </div>
            <div class="col-9 col-md-8 d-flex justify-content-end">
              <div class="dropdown">
                <button
                  class="btn dropdown-toggle"
                  type="button"
                  id="dropdownLangButton"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  ES <ion-icon name="globe"></ion-icon>
                </button>
                <div
                  class="dropdown-menu dropdown-menu-right"
                  aria-labelledby="dropdownLangButton"
                >
                  <a class="dropdown-item" href="#">English</a>
                  <a class="dropdown-item" href="#">Español</a>
                  <a class="dropdown-item" href="#">Português</a>
                </div>
              </div>
              <nav class="nav nav-social">
                <a class="nav-link" href="#"
                  ><i class="fab fa-facebook-square"></i
                ></a>
                <a class="nav-link" href="#"
                  ><i class="fab fa-tripadvisor"></i
                ></a>
                <a class="nav-link" href="#"
                  ><i class="fab fa-instagram"></i
                ></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
      <div class="header-middle">
        <div class="container">
         <?php
      		if( !isset($eses)) {
    		?>
         <div class="row justify-content-center">
            <div class="col-6 col-md-3 col-lg-4 d-flex justify-content-between justify-content-md-start">
              <a class="navbar-brand" href="index.html">
                <img src="img/logo-la-foret-la-playa-beach-club.svg" alt="La Foret" height="78" />
              </a>
            </div>
            <div class="col-md-9 col-lg-8 d-flex align-items-center">
              <nav class="navbar navbar-expand-md navbar-light w-100">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav w-100 justify-content-between">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle <?php if(!isset($class)){ echo ' active';}?>" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Ville La Plage
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item<?php if(isset($elhotelActive)){ echo ' active' ;} ?>" href="elhotel.html">El Hotel</a>
                        <a class="dropdown-item<?php if(isset($habitacionesActive)){ echo ' active' ;} ?>" href="habitaciones.html">Habitaciones</a>
                        <a class="dropdown-item<?php if(isset($galeriaActive)){ echo ' active' ;} ?>" href="galeria.html">Galeria</a>
                        <a class="dropdown-item<?php if(isset($ubicacionActive)){ echo ' active' ;} ?>" href="ubicacion.html">Ubicación</a>
                      </div>
                    </li>
                    <li class="nav-item<?php if(isset($beachclubActive)){ echo ' active' ;} ?>">
                      <a class="nav-link" href="beachclub.html">Beach club</a>
                    </li>
                    <li class="nav-item<?php if(isset($promoActive)){ echo ' active' ;} ?>">
                      <a class="nav-link" href="promociones.html">Promociones</a>
                    </li>
                    <li class="nav-item<?php if(isset($contactoActive)){ echo ' active' ;} ?>">
                      <a class="nav-link" href="contacto.html">Contacto</a>
                    </li>
                    <li class="nav-item nav-item-reserva">
                      <a class="nav-link nav-link-reserva" href="#"><i class="far fa-calendar-alt"></i> Reservas
                      </a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
          <div class="header-mobile d-block d-sm-none p-1">
            <div class="row justify-content-center">
              <div class="w-50 d-flex justify-content-between">
                <a class="btn btn-primary" href="#" type="button" data-toggle="collapse" data-target="#navbarToggleMobileMenu"
                  aria-controls="navbarToggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></a>
                <a class="btn btn-primary" href="#"><i class="far fa-calendar-alt"></i></a>
                <a class="btn btn-primary" href="#"><i class="fas fa-phone"></i></a>
              </div>
            </div>
            <nav class="collapse" id="navbarToggleMobileMenu">
              <ul class="navbar-nav p-2 mt-2 border-top">
                <span>Ville Le Foret</span>
                <ul class="navbar-nav">
                  <li class="nav-item pl-4<?php if(isset($elhotelActive)){ echo ' active' ;} ?>">
                    <a class="nav-link" href="elhotel.html">El Hotel</a>
                  </li>
                  <li class="nav-item pl-4<?php if(isset($habitacionesActive)){ echo ' active' ;} ?>">
                    <a class="nav-link" href="habitaciones.html">Habitaciones</a>
                  </li>
                  <li class="nav-item pl-4<?php if(isset($galeriaActive)){ echo ' active' ;} ?>">
                    <a class="nav-link" href="galeria.html">Galeria</a>
                  </li>
                  <li class="nav-item pl-4<?php if(isset($ubicacionActive)){ echo ' active' ;} ?>">
                    <a class="nav-link" href="ubicacion.html">Ubicación</a>
                  </li>
                </ul>
                <li class="nav-item<?php if(isset($beachclubActive)){ echo ' active' ;} ?>">
                  <a class="nav-link" href="beachclub.html">Beach club</a>
                </li>
                <li class="nav-item<?php if(isset($promoActive)){ echo ' active' ;} ?>">
                  <a class="nav-link" href="promociones.html">Promociones</a>
                </li>
                <li class="nav-item<?php if(isset($contactoActive)){ echo ' active' ;} ?>">
                  <a class="nav-link" href="contacto.html">Contacto</a>
                </li>
              </ul>
            </nav>
          </div>
        	<?php } else {
        	?>
        	<div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-between justify-content-md-center p-5">
              <a class="navbar-brand" href="index.html">
              	<img src="img/logo-ville-la-plage-la-foret.png" alt="Ville La Plage | La foret"  />
              </a>
            </div>
         </div>
        	<?php
        	}?>
        </div>
      </div>
    </header>
    <!-- END HEADER -->