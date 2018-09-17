<?php 


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MKL - Preg. Frecuentes</title>
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
            <img class="navbar-brand" alt="Logo-MKL" src="img/LOGO MKL-02.png">              
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" style="color: white" href="index1.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white" href="registrarse.php">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white" href="iniciar-sesion.php">Iniciar Sesion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: rgb(179, 195, 228)" href="preg-frec.php">Preguntas Frecuentes</a>
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


    <!-- Preguntas Frecuentes -->
    <div class="container mt-5 pt-5">
        <article class="row">    
            <div class="col-lg-8 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                <h4 class="pregFrec pt-5 pb-4 mb-4 text-black text-center"><b> Preguntas Frecuentes </b></h4>
                <hr class="my-4">
                    <li type="none" class="preguntas py-4"><h5><b>¿Debo crearme una cuenta para comprar por la Tienda Online?</b></h5>
                        <ul class="pt-3">Si, para poder realizar una compra por nuestra Tienda Online debes <a href= "registrarse.php">Registrarte</a></ul>
                    </li> 
                    <hr class="my-4">
                    <li type="none" class="preguntas py-4"><h5><b>¿Existe un mínimo para realizar la compra?</b></h5>
                        <ul class="pt-3">No contamos con mínimos de compra. Podes comprar tanto en formato minorista como mayorista. </ul>
                    </li> 
                    <hr class="my-4">
                    <li type="none" class="preguntas py-4"><h5><b>¿Cuales son los medios de pago?</b></h5></li>
                        <ul>Los medios de pago son:</ul> 
                            <ul class= "ml-5" type="square">
                                <ul type="none" class="items">Efectivo</li>
                                <li type="none" >Tarjetas de Débito</li>
                                <li type="none" >Tarjetas de Crédito</li>
                                <li type="none" class= "pb-4" >Depósito / Transferencia bancaria</li>
                            </ul>  
                    <hr class="my-4">                      
                    <li type="none" class="preguntas py-4"><h5><b>¿Tienen local en donde se puede visitar y comprar?</b></h5>
                        <ul class="pt-3">Si, contamos con un showroom en San Isidro. En la calle Moreno 447. Los horarios de atención son de Lunes a Viernes de 9.30 a 12.30hs y de 15 a 18hs! No es necesario coordinar una cita previa. Aqui puedes ver nuestra <a href= "https://www.google.com.ar/maps/place/MKL+Distribuidora/@-34.4715578,-58.5194554,17z/data=!3m1!4b1!4m5!3m4!1s0x95bcb037150ba0ef:0xe05cfdfb5a45f0ed!8m2!3d-34.4715578!4d-58.5172757" target="_blank">ubicación</a>!</ul>
                    </li> 
                    <hr class="my-4"> 
                    <li type="none" class="preguntas py-4"><h5><b>¿Se realizan envíos?</b></h5></li>
                        <ul>Si, los envíos se pueden realizar por:</ul> 
                            <ul class= "ml-5" type="square">
                                <li type="none" >Mensajería</li>
                                <li type="none" >Micro a terminal</li>
                                <li type="none" >Correo a domicilio</li>
                                <li type="none" class="pb-4">Transporte / Expresso</li>

                            </ul> 
                        <ul class="pb-4"><strong> Atención: "Superando los $10.000.- los envíos son GRATIS !!!"</strong></ul>
                    <hr class="my-4">     
                    <li type="none" class="preguntas py-4"><h5><b>¿Hacen Factura?</b></h5>
                        <ul class="pt-3">Si, hacemos Factura A o B. Recorda enviarnos tus datos en el momento de realizar la compra para poder generar la Fc que aplique con tu necesidad!</ul>
                    </li> 
                </ul>
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+955DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi5jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ45jBk0WLaUAdn589aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE5ZbWh2IMqE241rYiqJxyMiZ5OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>     
</body>
</html>