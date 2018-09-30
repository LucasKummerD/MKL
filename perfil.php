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

<?php require 'header.php' ?>

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


    <?php require 'script.php'; ?>

  </body>
</html>
