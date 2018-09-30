<?php
    require 'funciones.php';

//      if(guest()) {
//         redirect('register.php');
//      }
    // si me llega una $_SESSION con la key 'email' seteada...
//    if(isset($_SESSION['email'])) {
        // buscame el usuario por mail y guardalo en $user (necesitamos usar los otros datos y solamente tenemos el email guardado en session!)
//        $user = dbEmailSearch($_SESSION['email']);
        // asigname a $username el nombre de usuario
//        $username = $user['username'];
        // Si tiene una foto de perfil, va a tener una key 'avatar' seteada...
//        if(array_key_exists('avatar', $user)){
            // Entonces asigname el valor de esa key a la variable $avatar
//            $avatar = $user['avatar'];
//        }
//    }

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
                        <a class="nav-link" style="color: rgb(179, 195, 228)" href="index1.php">Perfil</a>
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
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" style="color: white" href="#" id="configuracion" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Configuracion</a>
                        <div class="dropdown-menu dropdown-menu-right" style="background-color: #4a9ad3" readonly aria-labelledby="configuracion">
                          <a class="dropdown-item" style="color: #142430" href="">Your Profile</a>
                          <a class="dropdown-item" style="color: #142430" href="">Cambio de contraseña</a>
                          <a class="dropdown-item" style="color: #142430" href="">Ayuda</a>
                          <a class="dropdown-item" style="color: #142430" href="">Registro de Actividades</a>
                          <a class="dropdown-item" style="color: #142430" href="">Seguridad</a>
                          <a class="dropdown-item" style="color: #142430" href="">Cerrar Sesion</a>
                        </div>
                    </li>                 
                  </ul>
                </div>
            </div>
      </nav>
      <header>
<!---------------------------------------------------- Contenido -------------------------------------------------------------->         
<!------------------------------------------------------ Footer ---------------------------------------------------------------->

      <?php require 'footer.php'; ?>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  </body>
</html>
