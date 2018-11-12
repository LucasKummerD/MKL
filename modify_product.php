!<!DOCTYPE html>
<html>

    <?php require 'header.php' ?>

    <!-- modificar para cargar una imagen, modificar el navbar, este va a ser como un administrador, no caer el dropdown -->
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
                    <a class="nav-link" style="color: white" href="index1.php"></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white" href="registrarse.php"></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: rgb(179, 195, 228)" href="iniciar-sesion.php"></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white" href="preg-frec.php"></a>
                </li> 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: white" href="#" id="cuenta" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cuenta</a>
                        <div class="dropdown-menu dropdown-menu-right" style="background-color: #4a9ad3" readonly aria-labelledby="lineas">
                            <a class="dropdown-item" style="color: #142430" href=""></a>
                            <a class="dropdown-item" style="color: #142430" href="">Insertar Productos</a>
                            <a class="dropdown-item" style="color: #142430" href="">Productos</a> 
                            <a class="dropdown-item" style="color: #142430" href="perfil.php">Perfil</a>
                            <a class="dropdown-item" style="color: #142430" href="logout.php">Cerrar Sesión</a>
                        </div>
                </li>                    
              </ul>
            </div>
        </div>
    </nav>
<!---------------------------------------------------------------------------------------------------------------------------->
    <header class="bg-dark text-white">
        <div class="container text-center">
            <h1>Modificar Producto</h1>
            <p class="lead">Ocupe los campos que quiere modificar.</p>   
        </div>
    </header>
    <section class="bg-home">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto bg-light rounded">
                    <div class="signup-form">
                        <form action="controlador/insertar.php" method="post">
                            <div class="col-8 offset-sm-2 text-center my-3">
                                <h2>Nombre del producto</h2>     
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre del Producto" >
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="descripcion" placeholder="Breve descripción del Producto" >
                            </div>	
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="id_categoria" placeholder="Indique el código de la categoría" >
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="precio" placeholder="Precio del Producto" >
                            </div>
                            
                            <div class="form-group col-lg-10 mx-auto">
                                <label>Foto del Producto</label>
                                <input type="file" name="producto">
                            </div>

                            <div class="form-group col-10 m-auto col-sm-8 offset-sm-2">
                                <button type="submit" class="btn btn-lg btn-block bg-purple font-white">Modificar</button>
                            </div>
                        </form>
                    </div>                        
                </div>
            </div>
        </div>
    </section>





    <?php require 'footer.php'; ?>
    <?php require 'script.php'; ?>
    
</body>
</html>