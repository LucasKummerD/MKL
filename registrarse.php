<?php 

require 'funciones.php';


if($_POST) {

  $errors = validate($_POST);
  $usuario = createUser($_POST);

  if($_FILES['avatar']['error'] == 0) {
    $avatarErrors = validateAvatar($_POST);
    $usuario['avatar'] = photoPath($_POST);

    if(!empty($avatarErrors)) {
        $errors = array_merge($errors, $avatarErrors); 
    }    
  }
  
  if(count($errors) == 0) {  
    saveUser($usuario);
    redirect('iniciar-sesion.php');
  }
}


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

              </li>                 
            </ul>
          </div>
      </div>
    </nav>

 <!-- Contenido -->
 <div class="container pt-5 ">
   <article class="header mt-5 ">

<!------------------------------------- FORMULARIO DE CONTACTO ----------------------------------------->
      
      <div class="row">
      <form class="form form-group col-lg-6 mx-auto" action="" method="post" enctype="multipart/form-data">

<!-- Titulo -->
        <div class="form-group">  
        <div class="card card-signin my-5 ">              
        <div class="card-body"><h3 class="text-center">Registrarse</h3>
        <hr class="my-4">

<!-- Casilleros -->
          <form name="sentMessage" id="contactForm">

<!-- nombre -->
            <div class="form-group">             
              <label>Nombre y Apellido</label>
                <input type="text" name="nombre" class="form-control"  placeholder="Nombre y Apellido" value="<?=isset($errors['nombre']) ? "" : old('nombre'); ?>">
                <?php if(isset($errors['nombre'])): ?>
                        <div class="alert alert-danger">
                            <strong><?=$errors['nombre']; ?></strong>
                        </div>
                    <?php endif;?> 
            </div>
    
<!-- sexo -->
            <div class="form-group">
              <label>Sexo</label><br>
                <input class="m-2" type="radio" name="sexo" value="sexo1">
                  <label class="mr-5" for="sexo">Masculino</label>
                <input class="m-2" type="radio" name="sexo" value="sexo2">
                  <label for="sexo">Femenino</label>
            </div>
<!-- cel -->          
            <div class="form-group">
              <label>Celular</label>
                <input type="tel" name="cel" class="form-control" placeholder="+54 11" valu="<?= isset($errors['cel']) ? "" : old('cel'); ?>">
                <?php if(isset($errors['cel'])): ?>
                    <div class="alert alert-danger">
                        <strong><?=$errors['cel']; ?></strong>
                    </div>
                  <?php endif;?>
            </div>

<!-- email --> 
            <div class="form-group">
                <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="example@example.com" valu="<?= isset($errors['email']) ? "" : old('email'); ?>">
                  <?php if(isset($errors['email'])): ?>
                      <div class="alert alert-danger">
                        <strong><?=$errors['email']; ?></strong>
                      </div>
                  <?php endif;?>
            </div>

 <!-- cuit -->
            <div class="form-group">
                  <label>CUIT / CUIL</label>
                  <input type="numeric" name="cuit" class="form-control" placeholder="30-71000000-1" valu="<?= isset($errors['cuit']) ? "" : old('cuit'); ?>">
                  <?php if(isset($errors['cuit'])): ?>
                      <div class="alert alert-danger">
                        <strong><?=$errors['cuit']; ?></strong>
                      </div>  
                  <?php endif;?>
           </div>

<!-- direccion -->
            <div class="form-group">
                  <label>Dirección</label>
                  <input type="direccion" name="direccion" class="form-control" placeholder="Av. San Martin 123" valu="<?= isset($errors['direccion']) ? "" : old('direccion'); ?>">
                  <?php if(isset($errors['direccion'])): ?>
                      <div class="alert alert-danger">
                        <strong><?=$errors['direccion']; ?></strong>
                      </div>
                  <?php endif;?>
            </div>

<!-- localidad -->
            <div class="form-group">
                  <label>Localidad</label>
                  <input type="localidad" name="localidad" class="form-control" placeholder="C.A.B.A." valu="<?= isset($errors['localidad']) ? "" : old('localidad'); ?>">
                  <?php if(isset($errors['localidad'])): ?>
                      <div class="alert alert-danger">
                        <strong><?=$errors['localidad']; ?></strong>
                      </div>
                  <?php endif;?>
            </div>

<!-- prov -->
            <div class="form-group">
                  <label>Provincia</label>
                  <input type="provincia" name="provincia" class="form-control" placeholder="Buenos Aires" valu="<?= isset($errors['provincia']) ? "" : old('provincia'); ?>">
                  <?php if(isset($errors['provincia'])): ?>
                      <div class="alert alert-danger">
                        <strong><?=$errors['provincia']; ?></strong>
                      </div>
                  <?php endif;?>
            </div>

<!-- usuario -->
            <div class="form-group">
                  <label>Usuario</label>
                  <input type="usuario" name="usuario" class="form-control" placeholder="" valu="<?= isset($errors['usuario']) ? "" : old('usuario'); ?>">
                  <?php if(isset($errors['usuario'])): ?>
                      <div class="alert alert-danger">
                        <strong><?=$errors['usuario']; ?></strong>
                      </div>
                  <?php endif;?>
            </div>

<!-- imagen de perfil -->
            <div class="form-group">
                  <label>Foto de Perfil</label>
                  <br>
                  <input type="file" name="avatar" value="<?= isset($errores['avatar']) ? "" : old('avatar'); ?>" >
                  <?php if(isset($errores['avatar'])): ?>
                      <div class="alert alert-danger">
                        <strong><?=$errores['avatar']; ?></strong>
                      </div>
                  <?php endif;?>
            </div>

<!-- password -->
            <div class="form-group">
                  <label>Contraseña</label>
                  <input type="password" name="password" class="form-control">
                  <?php if(isset($errors['password'])): ?>
                    <div class="alert alert-danger">
                        <strong><?=$errors['password']; ?></strong>
                    </div>
                <?php elseif(isset($errors['cpassword'])): ?>
                    <div class="alert alert-danger">
                        <strong><?=$errors['cpassword']; ?></strong>
                    </div>
                <?php endif;?>
                </div>

<!-- cpassword -->
            <div class="form-group">
                  <label>Repetir Contraseña</label>
                  <input type="password" name="cpassword" class="form-control">
                  <?php if(isset($errors['confirm'])): ?>
                    <div class="alert alert-danger">
                        <strong><?=$errors['confirm']; ?></strong>
                    </div>
                <?php endif;?>
            </div>

<!-- terminos y condiciones -->
            <div class="form-group">
                  <input type="checkbox" name="terminos" value="">
                  <label>Acepto los terminos y condiciones.</label>
            </div>

<!-- Boton Enviar -->
            <div id="success"></div>    
            <button type="submit" class="btn" style="background-color: #338bca" id="sendMessageButton">Registrarse</button>
            
          </form>
              </div>
            </div>
        </div>
      </form>
      </div>
    </article>  
  </div>

<!---------------------------------FIN DEL FORMULARIO-------------------------------------------------->

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