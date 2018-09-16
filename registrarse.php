<?php 



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MKL - Registrarse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  </head>
<body>
  
<!-- Barra de navegacion -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light fixed-top" style="background-color: #338bca;">
        <div class="container">
          <img class="navbar-brand" alt="Logo-MKL" src="img/LOGO MKL-01.png">              
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> 
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" style="color: white" href="index1.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: rgb(179, 195, 228)" href="registrarse.php">Registrarse</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="iniciar-sesion.php">Iniciar Sesion</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" style="color: white" href="preg-frec.php">Preguntas Frecuentes</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: white" href="#" id="lineas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lineas</a>
                  <div class="dropdown-menu dropdown-menu-right" style="background-color: #4a9ad3" readonly aria-labelledby="lineas">
                    <a class="dropdown-item" style="color: #142430" href="">Catering</a>
                    <a class="dropdown-item" style="color: #142430" href="">Hotel</a>
                    <a class="dropdown-item" style="color: #142430" href="">Cotillon</a>
                    <a class="dropdown-item" style="color: #142430" href="">Barra</a>
                  </div>
              </li>                 
            </ul>
          </div>
      </div>
    </nav>

 <!-- Contenido -->
 <div class="container pt-5 ">
   <article class="header mt-5 ">

<!-- Formulario de Contacto bin/contact_me.php -->
      <div class="row">
          <div class="col-lg-7 mx-auto">
              <div class="card card-signin my-5 ">
                  <div class="card-body"><h3 class="text-center">Registrarse</h3>
            <hr class="my-4">
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Nombre y Apellido:</label>
                  <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name." placeholder="Nombre y Apellido">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Celular:</label>
                  <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number." placeholder="+54 11">
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Email:</label>
                  <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." placeholder="example@example.com">
                </div>
              </div>
              <div class="control-group form-group">
                  <div class="controls">
                    <label>CUIT/CUIL:</label>
                    <input type="Cuit" class="form-control" id="cuit" required data-validation-required-message="No igresó la su CUIT/CUIL." placeholder="xx-xxxxxxxx-x">
                  </div>
              </div>
              <div class="control-group form-group">
                  <div class="controls">
                    <label>Dirección:</label>
                    <input type="direccion" class="form-control" id="direccion" required data-validation-required-message="No ingresó su Dirección." placeholder="Av. San Martin 123">
                  </div>
              </div>
              <div class="control-group form-group">
                  <div class="controls">
                    <label>Localidad:</label>
                    <input type="localidad" class="form-control" id="localidad" required data-validation-required-message="No ingresó su Localidad." placeholder="C.A.B.A.">
                  </div>
              </div>
              <div class="control-group form-group">
                  <div class="controls">
                    <label>Provincia:</label>
                    <input type="provincia" class="form-control" id="provincia" required data-validation-required-message="No igresó su Provincia." placeholder="Buenos Aires">
                  </div>
              </div>
              <div class="control-group form-group">
                  <div class="controls">
                    <label>Usuario:</label>
                    <input type="usuario" class="form-control" id="usuario" required data-validation-required-message="No ingresó su Usuario." placeholder="">
                  </div>
              </div>
              <div class="control-group form-group">
                  <div class="controls">
                    <label>Contraseña:</label>
                    <input type="password" class="form-control" id="password" required data-validation-required-message="No igresó su Passoword." placeholder="">
                  </div>
              </div>
              <div class="control-group form-group">
                  <div class="controls">
                    <label>Repetir Contraseña:</label>
                    <input type="password" class="form-control" id="password" required data-validation-required-message="Su Password no coincide." placeholder="">
                  </div>
              </div>
              <div id="success"></div>    
              <button type="submit" class="btn" style="background-color: #338bca" id="sendMessageButton">Registrarse</button>
            </form>
                  </div>
          </div>
        </div>
      </div>
    </article>  
  </div>


<!-- Footer -->
<footer class="footer-distributed">
  <div class="footer-center">
    <div>
      <div>
        <i class="fa fa-map"></i>
        <p>Av. Centenario 457, San Isidro</p>
      </div>
      <div>
        <i class="fa fa-phone"></i>
        <p>+54 9 4723-7746</p>
      </div>
      <div>
        <i class="fa fa-phone"></i>
        <p>+54 9 15 5932-7746</p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:mkl-info@company.com">mkl-info@company.com</a></p>
      </div>
    </div>  
    <p class="footer-company-name pl-4 pt-5">Copyright &copy; PaFeLu 2018</p>  
  </div>
  <div class="footer-center">
    <div class="mapa">
          <a href="https://www.google.com.ar/maps/place/MKL+Distribuidora/@-34.4716678,-58.5172767,15z/data=!4m2!3m1!1s0x0:0xe06cfdfb6a46f0ed?sa=X&ved=2ahUKEwje5dvNjbzdAhXMkZAKHeOrBl0Q_BIwDnoECAoQCw" target="_blank"><img src="img/mapa.jpg" title="Location" width=70%></a>
    </div>
  </div>
  <div class="footer-right">
    <p class="footer-company-about">
      <span>Sobre Nosotros</span>
      Somos una empresa dedicada la comercialización de insumos nacionales e importados para el sector gastronómico y hotelero. Contamos con una amplia línea de productos y atención personalizada tanto a minoristras y mayoristas.
    </p>
    <div class="footer-icons">
      <a href="https://es-la.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
      <a href="https://twitter.com/?lang=es" target="_blank"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/?hl=es-la" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>     
</body>
</html>