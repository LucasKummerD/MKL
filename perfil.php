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
    <body>

<!-- HAY QUE ACOMODAR TODO EL NAVBAR -->
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
        <div class="container">
            <?php if(guest()):?>
            <div class="alert alert-danger" role="alert">
                No estas autorizado en este sistema <a href="register.php" class="alert-link">Registrate!</a>
            </div>
            <?php else: ?>
            <div class="row">
                <div class="card col-4">
                    <?php if(!isset($user['avatar'])):?>
                    <img class="card-img-top" src="img/default.jpg" alt="avatar default">
                    <?php else: ?>
                    <img class="card-img-top" src="img/<?=$avatar?>" alt="avatar">
                    <?php endif;?>

                    
                    <div class="card-body">
                        <h5 class="card-title"><?="Bienvenido $username!" ?></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, adipisci.</p>
                        <a href="#" class="btn btn-primary">Codea!</a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>        
    </body>
</html>