<?php
    require_once ('../model/class.conection.php');
    require_once ('../model/class.requests.php');
    
//falta poner lo del stock- no se si se pone, habria que hacerlo como autoincremental cunado se suma un nuevo registro y que reste cuando se elimina un registro.

    $respuesta = null;
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $id_categoria = $_POST['id_categoria'];
    $precio = $_POST['precio'];
    
    if(trim($nombre)!="" && trim($descripcion)!="" && trim($id_categoria)!="" && trim($precio)!="")
    {
        $request = new Request();
        $respuesta = $request->registroProducto($nombre,$descripcion,$id_categoria,$precio);
        echo "<br><a href='../insertar.php'>Insertar otro producto...</a>";
    }else
    {
        echo "Por favor completar todos los campos del formulario...";
        echo "<br><a href='../insertar.php'>Insertar el Producto...</a>";
    }
    echo $respuesta;
?>


