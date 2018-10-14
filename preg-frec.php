<?php 


?>


<!DOCTYPE html>
<html>

<?php require 'header.php' ?>
    
    <body>
   
<!---------------------------------------------- Barra de navegacion ------------------------------------------------------------>
        
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
                        <a class="nav-link" style="color: white" href="iniciar-sesion.php">Iniciar Sesion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(179, 195, 228)" href="preg-frec.php">Preguntas Frecuentes</a>
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

<!--------------------------------------------------- Preguntas Frecuentes ------------------------------------------------------>

        <div class="container mt-5 pt-5">
            <article class="row">    
                <div class="col-lg-8 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                    <h4 class="pregFrec pt-5 pb-4 mb-4 text-black text-center">Preguntas Frecuentes</h4>
                    <hr class="my-4">
                        <li type="none" class="preguntas py-4"><h5><b>¿Debo crearme una cuenta para comprar por la Tienda Online?</b></h5>
                            <ul class="pt-3">Si, para poder realizar una compra por nuestra Tienda Online debes <a href= "registrarse.php">Registrarte</a></ul>
                        </li> 
                        <hr class="my-4">
                        <li type="none" class="preguntas py-4"><h5><b>¿Existe un mínimo para realizar la compra?</b></h5>
                            <ul class="pt-3">No contamos con mínimos de compra. Podes comprar tanto en formato minorista como mayorista. </ul>
                        </li> 
                        <hr class="my-4">
                        <li type="none" class="preguntas py-4"><h5><b>¿Cuales son los medios de pago?</b></h5></li>
                            <ul>Los medios de pago son:</ul> 
                                <ul class= "ml-5" type="square">
                                    <li type="none" class="items">Efectivo</li> 
                                    <li type="none" >Tarjetas de Débito</li>
                                    <li type="none" >Tarjetas de Crédito</li>
                                    <li type="none" class= "pb-4" >Depósito / Transferencia bancaria</li>
                                </ul>  
                        <hr class="my-4">                      
                        <li type="none" class="preguntas py-4"><h5><b>¿Tienen local en donde se puede visitar y comprar?</b></h5>
                            <ul class="pt-3">Si, contamos con un showroom en San Isidro. En la calle Moreno 447. Los horarios de atención son de Lunes a Viernes de 9.30 a 12.30hs y de 15 a 18hs! No es necesario coordinar una cita previa. Aqui puedes ver nuestra <a href= "https://www.google.com.ar/maps/place/MKL+Distribuidora/@-34.4715578,-58.5194554,17z/data=!3m1!4b1!4m5!3m4!1s0x95bcb037150ba0ef:0xe05cfdfb5a45f0ed!8m2!3d-34.4715578!4d-58.5172757" target="_blank">ubicación</a>!</ul>
                        </li> 
                        <hr class="my-4"> 
                        <li type="none" class="preguntas py-4"><h5><b>¿Se realizan envíos?</b></h5></li>
                            <ul>Si, los envíos se pueden realizar por:</ul> 
                                <ul class= "ml-5" type="square">
                                    <li type="none" >Mensajería</li>
                                    <li type="none" >Micro a terminal</li>
                                    <li type="none" >Correo a domicilio</li>
                                    <li type="none" class="pb-4">Transporte / Expresso</li>

                                </ul> 
                            <ul class="pb-4"><strong> Atención: "Superando los $10.000.- los envíos son GRATIS !!!"</strong></ul>
                        <hr class="my-4">     
                        <li type="none" class="preguntas py-4"><h5><b>¿Hacen Factura?</b></h5>
                            <ul class="pt-3">Si, hacemos Factura A o B. Recorda enviarnos tus datos en el momento de realizar la compra para poder generar la Fc que aplique con tu necesidad!</ul>
                        </li> 
                    </ul>
                    </div>
                    </div>
                </div>
            </article>
        </div>  


<!----------------------------------------------------------- Footer ------------------------------------------------------------>

        <?php require 'footer.php'; ?>


        <?php require 'script.php'; ?>  

    </body>
</html>