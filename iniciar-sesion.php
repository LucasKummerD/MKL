<?php 

require 'funciones.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MKL - Iniciar Sesion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        <script src="main.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>
    
    <body>
      

<!------------------------------------------------- Barra de navegacion -------------------------------------------------------->
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
                  <a class="nav-link" style="color: rgb(179, 195, 228)" href="iniciar-sesion.php">Iniciar Sesion</a>
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

<!---------------------------------------------------Iniciar Sesion------------------------------------------------------------>     
            <div class="container mt-5 pt-5">
              <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-6 mx-auto">
                    <div class="card card-signin my-5">
                    <div class="card-body">

                    <!-- Titulo -->
                      <h4 class="card-title text-center"><b>Iniciar Sesion</b></h4>
                      <hr class="my-4">
                      
                      <!-- Casilleros -->
                      <form class="form form-group" action="" method="post">
                        <div class="form-label-group">
                          <label for="inputEmail">Email</label>
                          <input type="email" id="inputEmail" class="form-control" placeholder="example@example.com">   
                        </div>
                        <br>

                        <div class="form-label-group">
                          <label for="inputPassword">Password</label>
                          <input type="password" id="inputPassword" class="form-control" placeholder="Password">
                        <br>

                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                          <input type="checkbox" class="custom-control-input"  id="customCheck1">
                          <label class="custom-control-label" for="customCheck1">Recordar</label>
                        </div>

                        <button class="btn btn-lg btn-block" style="background-color: #338bca" type="submit">Ingresar</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>


<!------------------------------------------------------------ Footer ---------------------------------------------------------->

        <?php require 'footer.php'; ?>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>     


    </body>
</html>