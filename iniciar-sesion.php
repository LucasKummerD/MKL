<?php 

require 'funciones.php';

?>

<!DOCTYPE html>
<html>

<?php require 'header.php' ?>
    
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



      <?php require 'script.php'; ?>

    </body>
</html>