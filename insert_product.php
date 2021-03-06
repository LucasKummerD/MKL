!<!DOCTYPE html>
<html>

    <?php require 'header.php' ?>

    <!-- modificar para cargar una imagen, modificar el navbar, este va a ser como un administrador, no caer el dropdown -->
<body>
    <?php require 'navbar_admin.php'?>
    
    <header class="bg-dark text-white">
        <div class="container text-center">
            <h1>Carga de Stock</h1>
            <p class="lead">Formulario para cargar productos.</p>
        </div>
    </header>
    <section class="bg-home">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto bg-light rounded">
                    <div class="signup-form">
                        <form action="controlador/insertar.php" method="post">
                            <div class="col-8 offset-sm-2 text-center my-3">
                                <h2>Registrar producto</h2>
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
                                <button type="submit" class="btn btn-lg btn-block bg-purple font-white">Registrar Producto</button>
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