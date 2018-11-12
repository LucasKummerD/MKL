<?php
require_once ('../model/class.conection.php');
require_once ('../model/class.requests.php');

    $resultado = null;
    $request = new Request();
    
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $id_categoria = $_POST['id_categoria'];
    $precio = $_POST['precio'];
    $id = $_POST['id'];    

        if(trim($nombre)!="" && trim($descripcion)!="" && trim($id_categoria)!="" && trim($precio)!="")
        {
            $request = new Request();
            $resultado=$consultas->modificarProducto("nombre",$nombre,$id);
            $resultado=$consultas->modificarProducto("descripcion",$descripcion,$id);
            $resultado=$consultas->modificarProducto("id_categoria",$id_categoria,$id);
            $resultado=$consultas->modificarProducto("precio",$precio,$id);

            echo $resultado;
            echo "<br><a href='../consultar_productos.php'>Ver los Productos...</a>";  // ojo con la ruta!
        }   else
            {
                echo "Por favor completar todos los campos del formulario...";
                echo "<br><a href='../modify_producto.php'>Modificar el Producto...</a>";  // todavia no esta armada!
            }
   


?>