<?php 


?>


<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>MKL Distribuidora</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
      <script src="main.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  </head>

  <body>
  
<!---------------------------------------------------- Barra de navegacion ---------------------------------------------------->
      <nav class="navbar fixed-top navbar-expand-lg navbar-light fixed-top" style="background-color: #338bca;">
              <div class="container">
                <img class="navbar-brand" alt="Logo-MKL" src="img/LOGO MKL-02.png">              
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button> 
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(179, 195, 228)" href="index1.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" style="color: white" href="registrarse.php">Registrarse</a>
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
      <header>


<!---------------------------------------------------------- carousel ----------------------------------------------------------> 
        
        <div  id="carousel" class="carousel slide" data-ride="carousel">      
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">

      <!-- Slide  Uno-->
            <div class="carousel-item active" style="background-image: url('img/Carrousel-1.jpg');">
              <div class="carousel-caption d-none d-md-block">
                <h3></h3>
                <p></p>
              </div>
            </div>

      <!-- Slide Dos -->
            <div class="carousel-item" style="background-image: url('img/Carrousel-2.jpg');">
              <div class="carousel-caption d-none d-md-block">
                <h3></h3>
                <p></p>
              </div>
            </div>

      <!-- Slide Tres -->
            <div class="carousel-item" style="background-image: url('img/Carrousel-3.jpg');">
              <div class="carousel-caption d-none d-md-block">
                <h3></h3>
                <p></p>
              </div>
            </div>
          </div>

          <!-- Flechas Carousel -->
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </header>


<!--------------------------------------------------------- Contenido ---------------------------------------------------------->

<!--------------------------------------------------------- Productos ---------------------------------------------------------->

      <div class="container h6">
          <h1 class="my-4 py-4"><strong>PRODUCTOS DESTACADOS</h1>
        <div class="row">
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Foto-1.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">COMBO 1</a>
                </h4>
                <p class="card-text">Ofrecemos la decoracion y mobiliarios para el interperie que se adaptan perfectamente a la tematica que propongas para tu fiesta</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Foto-2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">COMBO 2</a>
                </h4>
                <p class="card-text">Nos adaptamos a todos los gustos, por eso si tenes que organizar baby showers, cumpleaños o bautismos, tenemos este combo preparado para que tu fiesta tenga la mejor estetica</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Foto-3-01.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">COMBO 3</a>
                </h4>
                <p class="card-text">Si necesitas que la noche sea perfecta, tenemos para vos un combo donde todo brilla. Desde lucas led, hasta mobiliarios luminosos para hacer de tu fiesta un gran evento inolvidable</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Foto -4.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">PRODUCTO 4</a>
                </h4>
                <p class="card-text">Tu bebida cobra vida con los hielos luminosos, son totalmente inofensivos. Podes utilizarlos para niños y adultos. Se pueden seleccionar manualmente 4 colores a eleccion o dejarlo en opcion random y convertir tu bebida en una fiesta.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Foto -5-05.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">PRODUCTO 5</a>
                </h4>
                <p class="card-text">Las sillas son siempre un problema para trasladar, si en tu fiesta no sabes cuanta gente viene, està opcion te salva. Sillas plegables, faciles de trasladar, irrompibles.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Foto -6-06.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">PRODUCTO 6</a>
                </h4>
                <p class="card-text">Vos solo encargate de disfrutar, te ofrecemos telas para tu decoración con tratamiento ignifugo. No arriesgues tu fiesta, confiá en los que saben</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Barra -07.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">PRODUCTO 7</a>
                </h4>
                <p class="card-text">No escatimes en la bebida! Nuestras barras son la mejores. Y lo más importante, nunca se quedan sin bebida.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Living cheto-08.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">PRODUCTO 8</a>
                </h4>
                <p class="card-text">Los living con estilos, son para gente con estilo. Si tu fiesta es elegante y queres intimidar a todos tus invitados recreamos un VIP en donde la exclusividad será solo para algunos</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Sillas Tiffani-09.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">PRODUCTO 9</a>
                </h4>
                <p class="card-text">Las sillas visten la mesa, si queres resaltar y salir de lo convencional, te ofrecemos lo mejor de lo mejor.</p>
              </div>
            </div>
          </div>
      </div>
    </div>
          
<!------------------------------------------------------ Footer ---------------------------------------------------------------->

      <?php require 'footer.php'; ?>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  </body>
</html>

