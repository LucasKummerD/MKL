<?php 

require 'funciones.php';

if(check()) {
  redirect('perfil.php');
}

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


<?php require 'header.php' ?>
  
  <body>
<!----------------------------------------------- Barra de navegacion ---------------------------------------------------------->
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

<!---------------------------------------------------- Contenido ---------------------------------------------------------------->
 <div class="container pt-5 ">
   <article class="header mt-5 ">

<!------------------------------------------------- FORMULARIO DE CONTACTO ------------------------------------------------------>
      
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
            <div class="form-group col-lg-10 mx-auto">             
              <label>Nombre y Apellido</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre y Apellido" value="<?=isset($errors['nombre']) ? "" : old('nombre'); ?>">
                <?php if(isset($errors['nombre'])): ?>
                      <div class="alert alert-danger">
                          <strong><?=$errors['nombre']; ?></strong>
                      </div>
                <?php endif;?> 
            </div>
    
<!-- sexo -->
            <div class="form-group col-lg-10 mx-auto">
              <label>Sexo</label><br>
              <input class="m-2" type="radio" name="sexo" value="Masculino">
                  <label class="mr-5" for="sexo">Masculino</label>
                <input class="m-2" type="radio" name="sexo" value="Femenino">
                  <label for="sexo">Femenino</label>
              <?php if(isset($errors['sexo'])): ?>
                    <div class="alert alert-danger">
                        <strong><?=$errors['sexo']; ?></strong>
                    </div>
              <?php endif;?> 
            </div>
<!-- cel -->          
            <div class="form-group col-lg-10 mx-auto">
              <label>Celular</label>
                <input type="tel" name="cel" class="form-control" placeholder="+54 11" valu="<?= isset($errors['cel']) ? "" : old('cel'); ?>">
                <?php if(isset($errors['cel'])): ?>
                    <div class="alert alert-danger">
                        <strong><?=$errors['cel']; ?></strong>
                    </div>
                <?php endif;?>
            </div>

<!-- email --> 
            <div class="form-group col-lg-10 mx-auto">
                <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="example@example.com" valu="<?= isset($errors['email']) ? "" : old('email'); ?>">
                  <?php if(isset($errors['email'])): ?>
                      <div class="alert alert-danger">
                        <strong><?=$errors['email']; ?></strong>
                      </div>
                  <?php endif;?>
            </div>

 <!-- usuario -->
            <div class="form-group col-lg-10 mx-auto">
                  <label>Usuario</label>
                  <input type="usuario" name="usuario" class="form-control" placeholder="" valu="<?= isset($errors['usuario']) ? "" : old('usuario'); ?>">
                  <?php if(isset($errors['usuario'])): ?>
                      <div class="alert alert-danger">
                        <strong><?=$errors['usuario']; ?></strong>
                      </div>
                  <?php endif;?>
            </div>

<!-- imagen de perfil -->
            <div class="form-group col-lg-10 mx-auto">
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
            <div class="form-group col-lg-10 mx-auto">
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
            <div class="form-group col-lg-10 mx-auto">
                  <label>Repetir Contraseña</label>
                  <input type="password" name="cpassword" class="form-control">
                  <?php if(isset($errors['confirm'])): ?>
                    <div class="alert alert-danger">
                        <strong><?=$errors['confirm']; ?></strong>
                    </div>
                <?php endif;?>
            </div>

<!-- terminos y condiciones -->
            <div class="form-group col-lg-10 mx-auto">
                <input type="checkbox" name="terminos[]" value = "acepto" >
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


<!---------------------------------------------------------- Footer -------------------------------------------------------------->

    <?php require 'footer.php'; ?>

    <?php require 'script.php'; ?>
    
  </body>
</html>